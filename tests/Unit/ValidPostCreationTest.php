<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class ValidPostCreationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test valid admin registration form input.
     */
    public function test_valid_admin_registration_form()
    {
        // Valid input
        $validInput = [
            'question' => 'What is ICT?',
            'answer' => 'Information Communication Technology',
            'link' => 'http://www.ict.com',
        ];

        // Validator
        $validator = Validator::make($validInput, [
            'question' => 'required|string|max:255',
            'answer' => 'required|string|max:255',
            'link' => 'required|url',
        ]);

        // Assert the validation passes
        $this->assertFalse($validator->fails());
    }

    /**
     * Test invalid admin registration form input.
     */
    public function test_invalid_admin_registration_form()
    {
        // Invalid input
        $invalidInput = [
            'question' => 'What is ICT?',
            'answer' => 'Information Communication Technology',
            'link' => 'invalid-url',
        ];

        // Validator
        $validator = Validator::make($invalidInput, [
            'question' => 'required|string|max:255',
            'answer' => 'required|string|max:255',
            'link' => 'required|url',
        ]);

        // Assert the validation fails
        $this->assertTrue($validator->fails());
    }
}
