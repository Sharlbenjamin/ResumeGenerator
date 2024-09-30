<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Experience;
use App\Models\User;

class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experience::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'job_title' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'company' => $this->faker->company(),
            'date_from' => $this->faker->date(),
            'date_to' => $this->faker->date(),
            'description' => $this->faker->text(),
        ];
    }
}
