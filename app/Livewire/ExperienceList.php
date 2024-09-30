<?php

namespace App\Livewire;

use App\Models\Education;
use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ExperienceList extends Component
{
    public $user;
    public $experiences;

    public $job_title;
    public $company;
    public $date_from;
    public $date_to;
    public $description;

    public function render()
    {
        return view('livewire.experience-list');
    }
    public function mount()
    {
        $this->user = Auth::user();
        $this->experiences = $this->user->experiences;
    }
    public function CreateExperience()
    {
        $user_id = Auth::user()->id;

        Experience::create([
            'user_id' => $user_id,
            'job_title' => $this->job_title,
            'company' => $this->company,
            'date_from' => $this->date_from,
            'date_to' => $this->date_to,
            'description' => $this->description,
        ]);
        return redirect()->route('dashboard');
    }
}
