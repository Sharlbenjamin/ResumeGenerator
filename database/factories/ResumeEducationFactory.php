<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Education;
use App\Models\Resume;
use App\Models\ResumeEducation;

class ResumeEducationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ResumeEducation::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'resume_id' => Resume::factory(),
            'education_id' => Education::factory(),
        ];
    }
}
