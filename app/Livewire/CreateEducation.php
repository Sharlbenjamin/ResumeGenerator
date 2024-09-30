<?php

namespace App\Livewire;

use App\Models\Education;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateEducation extends Component
{
    public $education;

    public $name;
    public $school;
    public $date_from;
    public $date_to;
    public $description;

    public function render()
    {
        return view('livewire.create-education');
    }

    public function mount()
    {
        if($this->education){
            $this->name = $this->education->name;
            $this->school = $this->education->school;
            $this->date_from = $this->education->date_from->format('Y-m-d');
            $this->date_to = $this->education->date_to->format('Y-m-d');
            $this->description = $this->education->description;
        }
    }

    public function SaveEducation()
    {
        $user_id = Auth::user()->id;
        if($this->education){
            $this->education->update([
                'user_id' => $user_id,
                'name' => $this->name,
                'school' => $this->school,
                'date_from' => $this->date_from,
                'date_to' => $this->date_to,
                'description' => $this->description,
            ]);
        }else{

            Education::create([
                'user_id' => $user_id,
                'name' => $this->name,
                'school' => $this->school,
                'date_from' => $this->date_from,
                'date_to' => $this->date_to,
                'description' => $this->description,
            ]);
        }
        return redirect()->route('dashboard');
    }

    public function DeleteEducation()
    {
        $this->education->delete();
        return redirect()->route('dashboard');
    }
}
