<?php

namespace App\Livewire;

use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SkillsList extends Component
{
    public $user;
    public $skills;

    public $name;
    public $level;

    public function render()
    {
        return view('livewire.skills-list');
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->skills = $this->user->skills;
    }

    public function CreateSkill()
    {
        Skill::create([
            'user_id' => $this->user->id,
            'name' => $this->name,
            'level' => $this->level
        ]);
        return redirect()->route('dashboard');
    }
}
