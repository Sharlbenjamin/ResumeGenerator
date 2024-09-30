<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Education;
use App\Models\User;

class EducationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Education::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->name(),
            'school' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'date_from' => $this->faker->date(),
            'date_to' => $this->faker->date(),
            'description' => $this->faker->text(),
        ];
    }
}
