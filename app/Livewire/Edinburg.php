<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Reactive;


class Edinburg extends Component
{
    #[Reactive]
    public $resumeColor;
    #[Reactive]
    public $resumeText;
    #[Reactive]
    public $resumeBg;
    #[Reactive]
    public $resumeBorder;
    #[Reactive]
    public $selectedPersonal;
    #[Reactive]
    public $user;
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
        return view('livewire.edinburg');
    }

    public function mount()
    {
        
    }
}
