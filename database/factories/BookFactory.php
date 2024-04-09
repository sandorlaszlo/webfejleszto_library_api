<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cartegories = Category::all();
        return [
            'title' => $this->faker->sentence(),
            'ISBN' => $this->faker->unique()->isbn13(),
            'year' => $this->faker->year(),
            'pages' => $this->faker->numberBetween(100, 1000),
            'category_id' => $cartegories->random()->id,
        ];
    }
}
