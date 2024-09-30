<?php

namespace App\Livewire;

use App\Models\Education;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EducationList extends Component
{
    public $user;
    public $educations;

    public $name;
    public $school;
    public $date_from;
    public $date_to;
    public $description;

    public function render()
    {
        return view('livewire.education-list');
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->educations = $this->user->educations;
    }
    public function CreateEducation()
    {
        $user_id = Auth::user()->id;

        Education::create([
            'user_id' => $user_id,
            'name' => $this->name,
            'school' => $this->school,
            'date_from' => $this->date_from,
            'date_to' => $this->date_to,
            'description' => $this->description,
        ]);
        return redirect()->route('dashboard');
    }
}
