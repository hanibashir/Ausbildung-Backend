<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aus>
 */
class AusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(5),
            'image_url' => $this->faker->imageUrl(),
            'required_certificate' => $this->faker->word(),
            'training_duration' => $this->faker->numberBetween(2.5, 3.5),
            'working_hours' => $this->faker->numberBetween(2.5, 3.5),
            'salary_first_year' => $this->faker->numberBetween(700, 1500),
            'salary_second_year' => $this->faker->numberBetween(700, 1500),
            'salary_third_year' => $this->faker->numberBetween(700, 1500),
            'salary_fourth_year' => $this->faker->numberBetween(700, 1500),
            'body' => $this->faker->paragraphs(5, '<br/>\n'),
            'links' => $this->faker->url(),
            'popular' => $this->faker->boolean(),
            'best_paid' => $this->faker->boolean(),

        ];
    }
}
