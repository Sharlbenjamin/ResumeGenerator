<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Resume;
use App\Models\ResumeSkill;
use App\Models\Skill;

class ResumeSkillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ResumeSkill::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'resume_id' => Resume::factory(),
            'skill_id' => Skill::factory(),
        ];
    }
}
