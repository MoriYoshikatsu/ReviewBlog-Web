<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reviewpost>
 */
class ReviewpostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->realText(10),
            'body' => fake()->realText(100),
            'created_at' => now(),
            'updated_at' => now(),
            'tag_id' => 2,  // 追記
        ];
    }
}