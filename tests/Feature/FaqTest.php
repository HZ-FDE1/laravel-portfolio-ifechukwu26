<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Faq;

class FaqTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test successful FAQ registration.
     */
    public function test_faq_can_be_registered_successfully()
    {
        // Arrange
        $route = route('faqs.store'); // Assuming the route name for FAQ registration
        $requestBody = [
            'question' => 'What is ICT?',
            'answer' => 'Information Communication Technology',
            'link' => 'http://www.ict.com', // Use a valid URL format
        ];

        // Act
        $response = $this->post($route, $requestBody);

        // Then
        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
        $response->assertSessionHas('success', 'FAQ created successfully!');
        $this->assertDatabaseCount('faqs', 1);
        $this->assertDatabaseHas('faqs', [
            'question' => 'What is ICT?',
            'answer' => 'Information Communication Technology',
            'link' => 'http://www.ict.com',
        ]);
    }

    /**
     * Test unsuccessful FAQ registration with invalid input.
     */
    public function test_user_cannot_register_with_invalid_input()
    {
        // Arrange
        $route = route('faqs.store'); // Assuming the route name for FAQ registration
        $requestBody = [
            'question' => 'What is TIC?',
            'answer' => 'Information Technology',
            'link' => 'I dont know', // Invalid URL format
        ];

        // Act
        $response = $this->post($route, $requestBody);

        // Assert
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['question', 'answer']);
        $response->assertSessionDoesntHaveErrors('link');
    }

    /**
     * Basic test to ensure the home page is accessible.
     */
    public function test_home_page_is_accessible()
    {
        // Act
        $response = $this->get('/');

        // Assert
        $response->assertStatus(200); // Ensure the home page returns a 200 status
    }
}
        // Then
//        $response->assertSessionHasErrors(['link']);
//        $this->assertDatabaseCount('faqs', 0);
//        $this->assertDatabaseMissing('faqs', [
//            'question' => 'What is TIC?',
//            'answer' => 'Information Technology',
//            'link' => 'I dont know',
//        ]);
//    }


