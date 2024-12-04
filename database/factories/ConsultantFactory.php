<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Consultant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ConsultantFactory extends Factory
{
    protected $model = Consultant::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'position' => $this->faker->jobTitle(),
            'industry' => $this->faker->randomElement(['Finance', 'Healthcare', 'Technology', 'Retail', 'Energy']),
            'expertise' => $this->faker->randomElement(['Strategy', 'Operations', 'Digital Transformation', 'Sustainability']),
            'hourlyRate' => $this->faker->numberBetween(50, 500), // in thousands of rupiah
            'availability' => $this->faker->dateTimeBetween('now', '+6 months')->format('Y-m-d'),
            'image' => 'default.png', // Assume you have a default placeholder image
            'client_id' => Client::inRandomOrder()->first()->id,
        ];
    }
}
