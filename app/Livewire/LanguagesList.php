<?php

namespace App\Livewire;

use App\Models\Language;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LanguagesList extends Component
{
    public $user;
    public $languages;

    public $name;
    public $level;

    public function render()
    {
        return view('livewire.languages-list');
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->languages = $this->user->languages;
    }

    public function CreateLanguage()
    {
        Language::create([
            'user_id' => $this->user->id,
            'name' => $this->name,
            'level' => $this->level
        ]);
        return redirect()->route('dashboard');
    }
}
