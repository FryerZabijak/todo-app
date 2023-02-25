<?php

namespace Database\Factories;

use GuzzleHttp\Client;
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
        $client = new Client();
        $response = $client->get("http://www.boredapi.com/api/activity/");
        $data = json_decode($response->getBody());

        return [
            "title" => $data->activity,
            "tags" => $data->type,
            "content" => $this->faker->sentence(15),
            "complete" => rand(0,1)
        ];
    }
}
