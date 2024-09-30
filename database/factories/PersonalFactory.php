<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Personal;

class PersonalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personal::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'middle_name' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'first_phone' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'second_phone' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'email' => $this->faker->safeEmail(),
            'address' => $this->faker->text(),
            'date_of_birth' => $this->faker->date(),
            'nationality' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'marital_status' => $this->faker->word(),
            'gender' => $this->faker->word(),
            'github' => $this->faker->word(),
            'linked_in' => $this->faker->word(),
            'instagram' => $this->faker->word(),
            'facebook' => $this->faker->word(),
            'behance' => $this->faker->word(),
        ];
    }
}
