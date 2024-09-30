<?php

namespace App\Livewire;

use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateSkill extends Component
{
    public $user;
    public $skill;

    public $name;
    public $level;

    public function render()
    {
        return view('livewire.create-skill');
    }

    public function mount()
    {
        $this->user = Auth::user();
        if($this->skill){
            $this->name = $this->skill->name;
            $this->level = $this->skill->level;
        }
    }

    public function SaveSkill()
    {
        if($this->skill){
            $this->skill->update([
                'name' => $this->name,
                'level' => $this->level,
            ]);
        }else{
            Skill::create([
                'user_id' => $this->user->id,
                'name' => $this->name,
                'level' => $this->level,
            ]);
        }

        return redirect()->route('dashboard');
    }

    public function DeleteSkill()
    {
        $this->skill->delete();
        return redirect()->route('dashboard');
    }
}
