<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProjectsList extends Component
{
    public $user;
    public $projects;

    public $name;
    public $date;
    public $description;

    public function render()
    {
        return view('livewire.projects-list');
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->projects = $this->user->projects;
    }

    public function CreateProject()
    {
        $user_id = Auth::user()->id;

        Project::create([
            'user_id' => $user_id,
            'name' => $this->name,
            'date' => $this->date,
            'description' => $this->description,
        ]);
        return redirect()->route('dashboard');
    }
}
