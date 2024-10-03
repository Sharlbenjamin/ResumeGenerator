<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class AllPersonals extends Component
{
    public $personals;
    public $user;

    public function render()
    {
        return view('livewire.all-personals');
    }
    public function mount()
    {
        $this->user = Auth::user();
        $this->personals = $this->user->personals;
    }
}
