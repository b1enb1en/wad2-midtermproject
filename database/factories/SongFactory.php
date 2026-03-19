<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Song;
/**
 * @extends \Illuminate\Database\Eloquent\Factories.\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Song::class;
    
    public function definition(): array
    {
        
        return [
            'track_title' => $this->faker->sentence(2),
            'artist_name' => $this->faker->name(),
            'genre' => $this->faker->randomElement(['Pop', 'Rock', 'Hip Hop', 'Jazz', 'R&B']),
            'duration' => $this->faker->time('i:s'),
            'release_date' => $this->faker->date(),
        ];
    }
}
