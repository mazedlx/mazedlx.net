<?php

namespace Tests\Feature;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class ContactTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Mail::fake();
    }

    protected function validParams(array $overrides = []): array
    {
        return array_merge([
            'name' => 'Bob Doe',
            'email' => 'bob@example.com',
            'message' => 'Yo, what up dog! This should be longer than 30 characters.',
            'check_that' => 'spam',
            'timestamp' => time() - 5,
        ], $overrides);
    }

    #[Test]
    public function an_email_gets_sent_when_the_contact_form_is_submitted()
    {
        $response = $this->post(route('contact'), $this->validParams());

        $response->assertRedirect(route('sent'));
        Mail::assertSent(ContactMail::class, 1);
    }

    #[Test]
    public function name_is_required()
    {
        $response = $this->post(route('contact'), $this->validParams([
            'name' => '',
        ]));

        $response->assertSessionHasErrors(['name']);
        Mail::assertSent(ContactMail::class, 0);
    }

    #[Test]
    public function email_is_required()
    {
        $response = $this->post(route('contact'), $this->validParams([
            'email' => '',
        ]));

        $response->assertSessionHasErrors(['email']);
        Mail::assertSent(ContactMail::class, 0);
    }

    #[Test]
    public function email_must_be_an_email()
    {
        $response = $this->post(route('contact'), $this->validParams([
            'email' => 'not-an-email',
        ]));

        $response->assertSessionHasErrors(['email']);
        Mail::assertSent(ContactMail::class, 0);
    }

    #[Test]
    public function message_is_required()
    {
        $response = $this->post(route('contact'), $this->validParams([
            'message' => '',
        ]));

        $response->assertSessionHasErrors(['message']);
        Mail::assertSent(ContactMail::class, 0);
    }

    #[Test]
    public function check_that_must_be_spam()
    {
        $response = $this->post(route('contact'), $this->validParams([
            'check_that' => 'spam',
        ]));

        Mail::assertSent(ContactMail::class, 1);
    }

    #[Test]
    public function check_that_must_not_be_anything_else()
    {
        $response = $this->post(route('contact'), $this->validParams([
            'check_that' => 'anything else',
        ]));

        Mail::assertSent(ContactMail::class, 0);
    }

    #[Test]
    public function timestamp_must_be_4_seconds_or_farther_in_the_past()
    {
        $response = $this->post(route('contact'), $this->validParams([
            'timestamp' => time() - 4,
        ]));

        Mail::assertSent(ContactMail::class, 0);
    }
}
