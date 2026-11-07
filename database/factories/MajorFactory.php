<?php

namespace Database\Factories;

use App\Models\Major;
use App\Models\SchoolClass;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Major>
 */
class MajorFactory extends Factory
{
    protected $model = Major::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $schoolClass = [ 'AKL', 'TKJ', 'BID'];
        return [
            'name' => fake()->unique()->randomElement($schoolClass),
        ];
    }
}
