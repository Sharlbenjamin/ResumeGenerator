<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Reactive;

class AiResume extends Component
{
    
    #[Reactive]
    public $selectedPersonal;
    public $user;
    
    public $resumeColor;
    public $resumeText;
    public $resumeBg;
    public $resumeBorder;
    
    #[Reactive]
    public $selectedEducations;
    #[Reactive]
    public $selectedExperiences;
    #[Reactive]
    public $selectedSkills;
    #[Reactive]
    public $selectedProjects;
    #[Reactive]
    public $selectedLanguages;

    public function render()
    {
        return view('livewire.ai-resume');
    }

    public function mount()
    {
        $this->user = Auth::user();
    }
}
