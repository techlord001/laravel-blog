<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_display_index_page(): void
    {
        $response = $this->get(route('posts.index'));

        $response->assertStatus(200);
        $response->assertViewIs('posts.index');
    }
}
