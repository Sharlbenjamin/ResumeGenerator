<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Reactive;


class Edinburg extends Component
{
    #[Reactive]
    public $resumeColor;

    public $personal;
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
