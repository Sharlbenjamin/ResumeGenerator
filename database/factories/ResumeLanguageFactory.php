<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Language;
use App\Models\Resume;
use App\Models\ResumeLanguage;

class ResumeLanguageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ResumeLanguage::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'resume_id' => Resume::factory(),
            'language_id' => Language::factory(),
        ];
    }
}
