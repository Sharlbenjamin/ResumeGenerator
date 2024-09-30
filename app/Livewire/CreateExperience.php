<?php

namespace App\Livewire;

use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateExperience extends Component
{
    public $experience;
    public $job_title;
    public $company;
    public $date_from;
    public $date_to;
    public $description;

    public function render()
    {
        return view('livewire.create-experience');
    }

    public function mount()
    {
        if($this->experience){
            $this->job_title = $this->experience->job_title;
            $this->company = $this->experience->company;
            $this->date_from = $this->experience->date_from ? $this->experience->date_from->format('Y-m-d') : '';
            $this->date_to = $this->experience->date_to ? $this->experience->date_to->format('Y-m-d') : '';
            $this->description = $this->experience->description;
        }
    }

    public function SaveExperience()
    {
        $user_id = Auth::user()->id;
        if($this->experience){
            $this->experience->update([
                'user_id' => $user_id,
                'job_title' => $this->job_title,
                'company' => $this->company,
                'date_from' => $this->date_from,
                'date_to' => $this->date_to,
                'description' => $this->description,
            ]);
        }else{    
            Experience::create([
                'user_id' => $user_id,
                'job_title' => $this->job_title,
                'company' => $this->company,
                'date_from' => $this->date_from,
                'date_to' => $this->date_to,
                'description' => $this->description,
            ]);
        }
        return redirect()->route('dashboard');
    }

    public function DeleteExperience()
    {
        $this->experience->delete();
        return redirect()->route('dashboard');
    }
}
