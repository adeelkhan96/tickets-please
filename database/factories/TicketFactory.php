<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Assuming you have a user with ID 1
            'title' => fake()->words(3, true), // Generate a random title with 3 words
            'description' =>  fake()->paragraph(), // Generate a random description
            'status' => fake()->randomElement(['A','C', 'H', 'X',]), // Randomly select a status
        ];
    }
}
