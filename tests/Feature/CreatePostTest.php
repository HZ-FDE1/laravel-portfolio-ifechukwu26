<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Post;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test successful post creation.
     */
    public function test_post_can_be_created_successfully()
    {
        // Arrange
        $requestBody = [
            'title' => 'Sample Post Title',
            'body' => 'This is the body of the sample post.',
        ];

        // Act
        $response = $this->post(route('posts.store'), $requestBody);

        // Assert
        $response->assertStatus(302); // Assuming redirect on success
        $response->assertSessionHasNoErrors();
        $this->assertDatabaseHas('posts', [
            'title' => 'Sample Post Title',
            'body' => 'This is the body of the sample post.',
        ]);
    }

    /**
     * Test post creation with invalid input.
     */
    public function test_post_creation_fails_with_invalid_input()
    {
        // Arrange
        $requestBody = [
            'title' => '', // Title is required
            'body' => 'This is the body of the sample post.',
        ];

        // Act
        $response = $this->post(route('posts.store'), $requestBody);

        // Assert
        $response->assertSessionHasErrors(['title']);
        $this->assertDatabaseCount('posts', 0);
    }
}
