<?php

namespace Database\Factories;

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
            'slug' => $this->faker->slug(),
            'length' => $this->faker->randomNumber(3),
            'url' => 'https://videos.pexels.com/video-files/4114797/4114797-uhd_2560_1440_25fps.mp4',
            'thumbnail' => 'https://picsum.photos/446/240/',
            'description' => $this->faker->realText(100)
        ];
    }
}
