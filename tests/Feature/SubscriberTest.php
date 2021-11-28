<?php

namespace Tests\Feature;

use App\Mail\ConfirmSubscription;
use App\Subscriber;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class SubscriberTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function visitors_can_sign_up()
    {
        $response = $this->post(route('subscribe'), ['email' => 'bob@example.com']);

        $response->assertRedirect(route('subscribed'));
        $this->assertCount(1, Subscriber::all());
        tap(Subscriber::first(), function ($subscriber) {
            $this->assertSame('bob@example.com', $subscriber->email);
            $this->assertNotNull($subscriber->token);
            $this->assertNull($subscriber->confirmed_at);
        });
    }

    /** @test */
    public function emails_must_be_unique()
    {
        Subscriber::factory()->create([
            'email' => 'bob@example.com',
        ]);

        $response = $this->post(route('subscribe'), ['email' => 'bob@example.com']);

        $response->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function subscribers_receive_an_email()
    {
        Mail::fake();

        $this->post(route('subscribe'), ['email' => 'bob@example.com']);

        Mail::assertSent(ConfirmSubscription::class, function ($mail) {
            return $mail->hasTo('bob@example.com');
        });
    }

    /** @test */
    public function subscribers_can_confirm_subscriptions()
    {
        $subscriber = Subscriber::factory()->create([
            'email' => 'bob@example.com',
            'token' => 'asdfghjk',
        ]);

        $response = $this->get(route('confirm', ['token' => 'asdfghjk']));

        $response->assertRedirect(route('thank-you'));
        $this->assertNotNull($subscriber->fresh()->confirmed_at);
    }

    /** @test */
    public function subscribers_can_unsubscribe()
    {
        $this->withoutExceptionHandling();
        $subscriber = Subscriber::factory()
            ->confirmed()
            ->create([
                'email' => 'bob@example.com',
                'token' => 'asdfghjk',
            ]);

        $response = $this->get(route('unsubscribe', ['token' => 'asdfghjk']));

        $response->assertRedirect(route('bye'));
        $this->assertCount(0, Subscriber::all());
    }
}
