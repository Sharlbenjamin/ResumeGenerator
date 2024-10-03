<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateProject extends Component
{
    public $project;

    public $name;
    public $date;
    public $description;

    public function render()
    {
        return view('livewire.create-project');
    }

    public function mount()
    {
        if($this->project){
            $this->name = $this->project->name;
            $this->date = $this->project->date->format('Y-m-d');
            $this->description = $this->project->description;
        }
    }

    public function SaveProject()
    {
        $user_id = Auth::user()->id;
        if($this->project){
            $this->project->update([ 
                'user_id' => $user_id,
                'name' => $this->name,
                'date' => $this->date ? $this->date : null,
                'description' => $this->description,
            ]);
        }else{
            Project::create([
                'user_id' => $user_id,
                'name' => $this->name,
                'date' => $this->date,
                'description' => $this->description,
            ]);
        }

        return redirect()->route('dashboard');
    }

    public function DeleteProject()
    {
        $this->project->delete();
        return redirect()->route('dashboard');
    }
}
