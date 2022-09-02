<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'project_id' => rand(1, 10),
            'managed_by' => rand(1, 20),
            'title' => $this->faker->title(),
            'description' => $this->faker->text(40),
            'total' => rand(100, 10000)
        ];
    }
}
