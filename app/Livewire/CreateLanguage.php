<?php

namespace App\Livewire;

use App\Models\Language;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateLanguage extends Component
{
    public $user;
    public $language;

    public $name;
    public $level;

    public function render()
    {
        return view('livewire.create-language');
    }

    public function mount()
    {
        $this->user = Auth::user();
        if($this->language){
            $this->name = $this->language->name;
            $this->level = $this->language->level;
        }
    }

    public function SaveLanguage()
    {
        if($this->language){
            $this->language->update([
                'name' => $this->name,
                'level' => $this->level,
            ]);
        }else{
            Language::create([
                'user_id' => $this->user->id,
                'name' => $this->name,
                'level' => $this->level,
            ]);
        }

        return redirect()->route('dashboard');
    }

    public function DeleteLanguage()
    {
        $this->language->delete();
        return redirect()->route('dashboard');
    }
}
