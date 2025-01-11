<?php

namespace Database\Factories;

use App\Models\Employer;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomSalaries = [
            '$20,000 USD',
            '$30,000 USD',
            '$40,000 USD',
            '$50,000 USD',
            '$60,000 USD',
            '$70,000 USD',
            '$80,000 USD',
            '$90,000 USD',
            '$100,000 USD',
        ];

        $randomLocations = [
            'New York',
            'Los Angeles',
            'Chicago',
            'Houston',
            'Phoenix',
            'Philadelphia',
            'San Antonio',
            'San Diego',
            'Dallas',
            'San Jose',
            'Austin',
            'Jacksonville',
            'San Francisco',
            'Indianapolis',
            'Columbus',
            'Fort Worth',
            'Charlotte',
            'Seattle',
            'Denver',
            'El Paso',
            'Detroit',
            'Washington',
            'Boston',
            'Memphis',
            'Nashville',
            'Portland',
            'Oklahoma City',
            'Las Vegas',
            'Baltimore',
            'Louisville',
            'Milwaukee',
            'Albuquerque',
            'Tucson',
            'Fresno',
            'Sacramento',
            'Mesa',
            'Kansas City',
            'Atlanta',
            'Long Beach',
            'Colorado Springs',
            'Raleigh',
            'Miami',
            'Virginia Beach',
            'Omaha',
            'Oakland',
            'Minneapolis',
            'Tulsa',
            'Arlington',
            'New Orleans',
            'Wichita',
            'Cleveland',
            'Tampa',
            'Oregon',
            'Bakersfield',
            'Aurora',
            'Honolulu',
            'Anaheim',
            'Santa Ana',
            'Riverside',
            'Corpus Christi',
            'St. Louis'
        ];

        $randomSchedules = [
            'Full-time',
            'Part-time'
        ];

        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement($randomSalaries),
            'location' => fake()->randomElement($randomLocations),
            'schedule' => fake()->randomElement($randomSchedules),
            'url' => fake()->url(),
            'featured' => false
        ];
    }
}
