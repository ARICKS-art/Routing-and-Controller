<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis' =>fake()->unique()->numerify('####'),
            'name' => fake()->name(),
            'gender' => fake()->randomElement(['laki-laki', 'perempuan']),
            'major' => fake()->randomElement(['TKJ', 'AKL', 'BID']),
            'class' => fake()->randomElement(['10 AKL 1','10 AKL 2', '11 AKL 1', '11 AKL 2', '12 AKL 1', '12 AKL 2', '10 TKJ 1', '10 TKJ 2', '11 TKJ 1',' 11 TKJ 2', '12 TKJ 1',' `12 TKJ 2', '10 BID 1', '10 BID 2', '11 BID 1', '11 BID 2', '12 BID 1', '12 BID 2']),
        ];
    }
}
