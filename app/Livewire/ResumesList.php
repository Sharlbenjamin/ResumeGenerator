<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ResumesList extends Component
{
    public $user;
    public $resumes;
    public function render()
    {
        return view('livewire.resumes-list');
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->resumes = $this->user->resumes;
    }
}
