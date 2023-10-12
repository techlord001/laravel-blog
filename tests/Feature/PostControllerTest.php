<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_can_display_index_page(): void
    {
        $response = $this->get(route('posts.index'));

        $response->assertStatus(200);
        $response->assertViewIs('posts.index');
    }

    /**
     * @test
     */
    public function it_can_display_create_page(): void
    {
        $response = $this->get(route('posts.create'));

        $response->assertStatus(200);
        $response->assertViewIs('posts.create');
    }

    /**
     * @test
     */
    public function it_can_store_a_new_post(): void
    {
        $response = $this->post(route('posts.store'), [
            'title' => 'Test Title',
            'content' => 'Test Content',
            'img_path' => 'Test Image Path',
        ]);

        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function it_can_display_show_page(): void
    {
        $post = Post::factory()->create();
        $response = $this->get(route('posts.show', $post));

        $response->assertStatus(200);
        $response->assertViewIs('posts.show');
    }

    /**
     * @test
     */
    public function it_can_edit_a_post(): void
    {
        $post = Post::factory()->create();
        $response = $this->get(route('posts.edit', $post));

        $response->assertStatus(200);
        $response->assertViewIs('posts.edit');
        $response->assertViewHas('post', $post);
    }

    /**
     * @test
     */
    public function it_can_update_a_post(): void
    {
        $post = Post::factory()->create();

        $updatedData = [
            'title' => 'Test Title',
            'content' => 'Test Content',
            'img_path' => 'Test Image Path',
        ];

        $response = $this->put(route('posts.update', $post), $updatedData);

        $response->assertStatus(302);
        $response->assertRedirect(route('posts.show', $post));
        $this->assertDatabaseHas('posts', $updatedData);
    }

    /**
     * @test
     */
    public function it_can_delete_a_post(): void
    {
        $post = Post::factory()->create();
        $response = $this->delete(route('posts.destroy', $post));

        $response->assertStatus(302);
        $response->assertRedirect(route('posts.index'));
        $this->assertDatabaseMissing('posts', ['id' => $post->id]);
    }
}
