<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Carbon;

class PostTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        Storage::fake('posts');
    }

    /** @test */
    public function it_retrieves_all_post()
    {
        Storage::disk('posts')->put('2018-01-17.slug.md', file_get_contents(base_path('tests/__fixtures__/blog-post.md')));
        Storage::disk('posts')->assertExists('2018-01-17.slug.md');

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Some title');
    }

    /** @test */
    public function it_retrieves_a_single_post()
    {
        Storage::disk('posts')->put('2018-02-23.this-is-a-slug.md', file_get_contents(base_path('tests/__fixtures__/blog-post.md')));
        Storage::disk('posts')->assertExists('2018-02-23.this-is-a-slug.md');

        $response = $this->get('/2018/02/23/this-is-a-slug');

        $response->assertStatus(200);
        $response->assertSee('Some title');
    }

    /** @test */
    public function it_retrieves_only_published_posts()
    {
        Storage::disk('posts')->put('2018-02-22.unpublished.md', file_get_contents(base_path('tests/__fixtures__/unpublished-post.md')));
        Storage::disk('posts')->assertExists('2018-02-22.unpublished.md');

        $response = $this->get('/2018/02/22/unpublished');

        $response->assertStatus(404);
    }

    /** @test */
    public function it_creates_a_new_post()
    {
        Artisan::call('post:create', [
            'title' => 'Some title',
            '--date' => '2018-03-24',
            '--publish' => 'yes',
        ]);

        Storage::disk('posts')->assertExists('2018-03-24.some-title.md');
        $this->assertEquals(
            file_get_contents(base_path('tests/__fixtures__/new-post.md')),
            Storage::disk('posts')->get('2018-03-24.some-title.md')
        );
    }
}
