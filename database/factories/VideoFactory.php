<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
            'category_id' => Category::first() ?? Category::factory(),
            'slug' => $this->faker->slug(),
            'length' => $this->faker->randomNumber(3),
            'url' => 'https://paytakhtpethospital.com/wp-content/uploads/2024/08/sample-video.mp4',
            'thumbnail' => 'https://picsum.photos/446/240/',
            'description' => $this->faker->realText(100)
        ];
    }
}
