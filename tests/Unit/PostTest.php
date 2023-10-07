<?php

namespace Tests\Unit;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class PostTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    /**
     * Test if a post can be created.
     * @test
     */
    public function it_can_create_a_post(): void
    {
        $post = Post::factory()->create();

        $this->assertDatabaseHas('posts', ['title' => $post->title]);
    }
}
