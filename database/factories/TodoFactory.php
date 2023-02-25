<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tags = ["home", "work", "friends", "family"];

        return [
            "title" => $this->faker->sentence(3),
            "tags" => $tags[array_rand($tags)],
            "content" => $this->faker->sentence(15),
            "complete" => rand(0,1)
        ];
    }
}
