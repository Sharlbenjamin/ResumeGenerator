<?php

namespace App\Livewire;

use App\Models\Personal;
use Illuminate\Container\Attributes\Auth;
use Livewire\Component;

class CreatePersonal extends Component
{
    public $personal;
    
    public $user;
    public $first_name;
    public $last_name;
    public $middle_name;
    public $first_phone;
    public $second_phone;
    public $email;
    public $address;
    public $date_of_birth;
    public $nationality;
    public $gender;
    public $marital_status;
    public $linked_in;
    public $github;
    public $behance;
    public $instagram;
    public $facebook;
    public $summary;
    public $title;

    public function render()
    {
        $this->user = Auth::user();
        return view('livewire.create-personal');
    }

    public function CreatePersonal()
    {
        if($this->personal){
            $this->personal->update([
                'user_id' => $this->user->id,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'middle_name' => $this->middle_name,
                'first_phone' => $this->first_phone,
                'second_phone' => $this->second_phone,
                'email' => $this->email,
                'address' => $this->address,
                'date_of_birth' => $this->date_of_birth,
                'nationality' => $this->nationality,
                'gender' => $this->gender,
                'marital_status' => $this->marital_status,
                'linked_in' => $this->linked_in,
                'github' => $this->github,
                'behance' => $this->behance,
                'instagram' => $this->instagram,
                'facebook' => $this->facebook,
                'summary' => $this->summary,
                'title' => $this->title,
            ]);
        }else{
            Personal::create([
                'user_id' => $this->user->id,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'middle_name' => $this->middle_name,
                'first_phone' => $this->first_phone,
                'second_phone' => $this->second_phone,
                'email' => $this->email,
                'address' => $this->address,
                'date_of_birth' => $this->date_of_birth,
                'nationality' => $this->nationality,
                'gender' => $this->gender,
                'marital_status' => $this->marital_status,
                'linked_in' => $this->linked_in,
                'github' => $this->github,
                'behance' => $this->behance,
                'instagram' => $this->instagram,
                'facebook' => $this->facebook,
                'summary' => $this->summary,
                'title' => $this->title,
            ]);
        }
        return redirect()->route('dashboard');
    }

    public function mount()
    {
        if($this->personal){
            $this->first_name = $this->personal->first_name;
            $this->last_name = $this->personal->last_name;
            $this->middle_name = $this->personal->middle_name;
            $this->first_phone = $this->personal->first_phone;
            $this->second_phone = $this->personal->second_phone;
            $this->email = $this->personal->email;
            $this->address  = $this->personal->address;
            $this->date_of_birth    = $this->personal->date_of_birth->format('Y-m-d');
            $this->nationality  = $this->personal->nationality;
            $this->gender   = $this->personal->gender;
            $this->marital_status   = $this->personal->marital_status;
            $this->linked_in    = $this->personal->linked_in;
            $this->github   = $this->personal->github;
            $this->behance  = $this->personal->behance;
            $this->instagram    = $this->personal->instagram;
            $this->facebook = $this->personal->facebook;
            $this->summary = $this->personal->summary;
            $this->title = $this->personal->title;
        }
    }

}
