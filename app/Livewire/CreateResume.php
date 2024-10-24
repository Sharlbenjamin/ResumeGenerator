<?php

namespace App\Livewire;

use App\Models\ResumeEducation;
use App\Models\ResumeExperience;
use App\Models\ResumeLanguage;
use App\Models\ResumeProject;
use App\Models\ResumeSkill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Language;
use App\Models\Personal;
use App\Models\Project;
use App\Models\Resume;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateResume extends Component
{
    public $resume;
    public $resumeColor;
    public $resumeText;
    public $resumeBg;
    public $resumeBorder;
    public $ResumeTemplate;
    
    public $user;

    public $name;

    public $personalDD;
    public $personalSearch;
    public $skillsDD;
    public $skillSearch;
    public $educationsDD;
    public $educationSearch;
    public $experiencesDD;
    public $experienceSearch;
    public $projectsDD;
    public $projectSearch;
    public $languagesDD;
    public $languageSearch;

    
    public $personal;
    public $selectedPersonal;
    public $educations = [];
    public $selectedEducations;
    public $experiences = [];
    public $selectedExperiences;
    public $skills = [];
    public $selectedSkills;
    public $projects = [];
    public $selectedProjects;
    public $languages = [];
    public $selectedLanguages;

    public function render()
    {

        $this->resumeText = 'text-'.$this->resumeColor.'-700';
        $this->resumeBorder = 'border-'.$this->resumeColor.'-700';
        $this->resumeBg = 'bg-'.$this->resumeColor.'-700';

        $this->selectedPersonal = Personal::find($this->personal);
        $this->selectedEducations = Education::whereIn('id', $this->educations)->get();
        $this->selectedExperiences = Experience::whereIn('id', $this->experiences)->get();
        $this->selectedSkills = Skill::whereIn('id', $this->skills)->get();
        $this->selectedProjects = Project::whereIn('id', $this->projects)->get();
        $this->selectedLanguages = Language::whereIn('id', $this->languages)->get();

        $this->personalDD = personal::where('title', 'LIKE', '%'.$this->personalSearch.'%')->where('user_id', $this->user->id)->get();
        $this->skillsDD = skill::where('name', 'LIKE', '%'.$this->skillSearch.'%')->where('user_id', $this->user->id)->get();
        $this->educationsDD = education::where('name', 'LIKE', '%'.$this->educationSearch.'%')->where('user_id', $this->user->id)->get();
        $this->experiencesDD = experience::where('job_title', 'LIKE', '%'.$this->experienceSearch.'%')->where('user_id', $this->user->id)->get();
        $this->projectsDD = project::where('name', 'LIKE', '%'.$this->projectSearch.'%')->where('user_id', $this->user->id)->get();
        $this->languagesDD = language::where('name', 'LIKE', '%'.$this->languageSearch.'%')->where('user_id', $this->user->id)->get();
        
        return view('livewire.create-resume');
    }

    public function mount()
    {
        $this->user = Auth::user();
        if($this->resume){
            $this->name = $this->resume->name;
            $this->personal = $this->resume->personal_id;
            $this->skills = $this->resume->skills->pluck('id')->toArray();
            $this->educations = $this->resume->educations->pluck('id')->toArray();
            $this->experiences = $this->resume->experiences->pluck('id')->toArray();
            $this->projects = $this->resume->projects->pluck('id')->toArray();
            $this->languages = $this->resume->languages->pluck('id')->toArray();

            $this->selectedPersonal = Personal::find($this->personal);
            $this->selectedEducations = Education::whereIn('id', $this->educations)->get();
            $this->selectedExperiences = Experience::whereIn('id', $this->experiences)->get();
            $this->selectedSkills = Skill::whereIn('id', $this->skills)->get();
            $this->selectedProjects = Project::whereIn('id', $this->projects)->get();
            $this->selectedLanguages = Language::whereIn('id', $this->languages)->get();

            $this->personalDD = personal::all();
            $this->skillsDD = skill::all();
            $this->educationsDD = education::all();
            $this->experiencesDD = experience::all();
            $this->projectsDD = project::all();
            $this->languagesDD = language::all();
        }
    }

    public function SaveResume()
    {
        if($this->resume){
            $this->resume->update([
                'name' => $this->name,
                'personal_id' => $this->personal,
            ]);
            foreach(ResumeEducation::where('resume_id', $this->resume->id)->get() as $entry){
                $entry->delete();
            }
            foreach(ResumeExperience::where('resume_id', $this->resume->id)->get() as $entry){
                $entry->delete();
            }
            foreach(ResumeSkill::where('resume_id', $this->resume->id)->get() as $entry){
                $entry->delete();
            }
            foreach(ResumeProject::where('resume_id', $this->resume->id)->get() as $entry){
                $entry->delete();
            }
            foreach(ResumeLanguage::where('resume_id', $this->resume->id)->get() as $entry){
                $entry->delete();
            }
            foreach($this->selectedEducations as $entry){
                ResumeEducation::create([
                    'resume_id' => $this->resume->id,
                    'education_id' => $entry->id
                ]);
            }
            foreach($this->selectedExperiences as $entry){
                ResumeExperience::create([
                    'resume_id' => $this->resume->id,
                    'experience_id' => $entry->id
                ]);
            }
            foreach($this->selectedSkills as $entry){
                ResumeSkill::create([
                    'resume_id' => $this->resume->id,
                    'skill_id' => $entry->id
                ]);
            }
            foreach($this->selectedProjects as $entry){
                ResumeProject::create([
                    'resume_id' => $this->resume->id,
                    'project_id' => $entry->id
                ]);
            }
            foreach($this->selectedLanguages as $entry){
                ResumeLanguage::create([
                    'resume_id' => $this->resume->id,
                    'language_id' => $entry->id
                ]);
            }
        }else{
            $newResume = Resume::create([
                'user_id' => $this->user->id,
                'name' => $this->name,
                'personal_id' => $this->personal,
            ]);
            foreach($this->selectedEducations as $entry){
                ResumeEducation::create([
                    'resume_id' => $newResume->id,
                    'education_id' => $entry->id
                ]);
            }
            foreach($this->selectedExperiences as $entry){
                ResumeExperience::create([
                    'resume_id' => $newResume->id,
                    'experience_id' => $entry->id
                ]);
            }
            foreach($this->selectedSkills as $entry){
                ResumeSkill::create([
                    'resume_id' => $newResume->id,
                    'skill_id' => $entry->id
                ]);
            }
            foreach($this->selectedProjects as $entry){
                ResumeProject::create([
                    'resume_id' => $newResume->id,
                    'project_id' => $entry->id
                ]);
            }
            foreach($this->selectedLanguages as $entry){
                ResumeLanguage::create([
                    'resume_id' => $newResume->id,
                    'language_id' => $entry->id
                ]);
            }
        }
        return redirect()->route('resumes.index');
    }

    public function DeleteResume()
    {
        $this->resume->delete();
        return redirect()->route('dashboard');
    }
}
