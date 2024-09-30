<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class AllPersonals extends Component
{
    public $personal;
    public $user;

    public function render()
    {
        return view('livewire.all-personals');
    }
    public function mount()
    {
        $this->user = Auth::user();
        $this->personal = $this->user->personal;
    }
}
