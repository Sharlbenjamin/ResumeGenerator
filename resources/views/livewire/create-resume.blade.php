<div class="">
    <div class="grid grid-cols-12 print:hidden">
        <div class="col-span-3">
            <div class="px-4 py-3.5 text-left text-sm text-gray-900">
                <p>Resume Name</p>
                <x-input wire:model.live="name" class="w-full hover:border-sky-400 border-2"></x-input>
            </div>
        </div>
        <div class="col-span-3">
            <div class="px-4 py-3.5 text-left text-sm text-gray-900">
                <p>Resume Color</p>
                <select wire:model.live="resumeColor" class="w-full border-2 border-gray-200 hover:border-sky-400 rounded-md">
                    <option value="gray">Black & White</option>
                    <option value="sky">Blue</option>
                    <option value="teal">Green</option>
                    <option value="pink">Pink</option>
                </select>
            </div>
        </div>
        <div class="col-span-3">
            <div class="px-4 py-3.5 text-left text-sm text-gray-900">
                <p>Resume Type</p>
                <select wire:model.live="ResumeTemplate" class="w-full border-2 border-gray-200 hover:border-sky-400 rounded-md">
                    <option value="Edinburg">Edinburg</option>
                    <option value="Harvard">Harvard</option>
                    <option value="AI">AI</option>
                </select>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12">
        <div class="col-span-3 print:hidden p-12">
            <p class="text-white text-4xl">Here is your Resume Preview ------></p>
            <div class="border mt-2"></div>
            <p class="mt-10 text-white text-4xl">After You finihs your resume oress Cmd + P or Ctrl + P  and save your Resume</p>
        </div>
        <div class="col-span-6 print:col-span-12 print:bg-white">
            <div class="print:hidden p-4 border-2 rounded-md m-2 bg-white grid grid-cols-12">
                {{-- Personal Data DD--}}
                <div class="px-4 py-3.5 text-left text-sm text-gray-900 print:hidden col-span-4">
                    <label for="personal.personal">Select Your Personal Data</label>
                    <select wire:model.live="personal" class="rounded-md w-full mt-3.5 p-1 pl-2 border-gray-300">
                        <option value="">Select Personal Data</option>
                        @foreach ($user->personals as $item)
                            <option value="{{$item->id}}">{{$item->first_name}} {{$item->last_name}}</option>
                        @endforeach
                    </select>
                </div>
                {{-- Experiences DD --}}
                <div class="px-4 py-3.5 text-left text-sm text-gray-900 print:hidden col-span-4">
                    <div x-data="{exps : false}">
                        <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-900">Select your Experiences</label>
                        <div class="relative mt-2">
                            <button x-on:click="exps = true" type="button" class="relative w-full cursor-pointer rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                            <input wire:model.live="experienceSearch" type="text" class="w-full p-0 border-0 text-xs focus:ring-0" placeholder="Search Experiences">
                            <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            </button>
                            <ul x-show="exps" x-on:click.outside="exps = false" class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                                @foreach ($experiencesDD as $experience) 
                                <label for="{{$experience->id}}.experience">
                                    <li class="relative cursor-pointer hover:bg-gray-200 py-2 pl-3 pr-9 text-gray-900">
                                        <span class="block truncate font-normal">{{$experience->job_title}} at {{$experience->company}}</span>
                                        <input type="checkbox" id="{{$experience->id}}.experience" class="hidden" value="{{$experience->id}}" wire:model.live="experiences">
                                        @if(in_array($experience->id, $experiences))
                                        <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        @endif
                                    </li>
                                </label>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                 {{-- Education DD--}}
            <div class="px-4 py-3.5 text-left text-sm text-gray-900 print:hidden col-span-4">
                <div x-data="{educs : false}">
                    <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-900">Select your Education & Qulifications</label>
                    <div class="relative mt-2">
                        <button x-on:click="educs = true" type="button" class="relative w-full cursor-pointer rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                            <input wire:model.live="educationSearch" type="text" class="w-full p-0 border-0 text-xs focus:ring-0" placeholder="Search Educations">
                        <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        </button>
                        <ul x-show="educs" x-on:click.outside="educs = false" class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                            @foreach ($educationsDD as $education) 
                            <label for="{{$education->id}}.education">
                                <li class="relative cursor-pointer hover:bg-gray-200 py-2 pl-3 pr-9 text-gray-900">
                                    <span class="block truncate font-normal">{{$education->name}}</span>
                                    <input type="checkbox" id="{{$education->id}}.education" class="hidden" value="{{$education->id}}" wire:model.live="educations">
                                    @if(in_array($education->id, $educations))
                                    <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    @endif
                                </li>
                            </label>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            {{-- Projects DD--}}
            <div class="px-4 py-3.5 text-left text-sm text-gray-900 print:hidden col-span-4">
                <div x-data="{projects : false}">
                    <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-900">Select Your Projects</label>
                    <div class="relative mt-2">
                        <button x-on:click="projects = true" type="button" class="relative w-full cursor-pointer rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                            <input wire:model.live="projectSearch" type="text" class="w-full p-0 border-0 text-xs focus:ring-0" placeholder="Search Projects">
                        <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        </button>
                        <ul x-show="projects" x-on:click.outside="projects = false" class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                            @foreach ($projectsDD as $project) 
                            <label for="{{$project->id}}.project">
                                <li class="relative cursor-pointer hover:bg-gray-200 py-2 pl-3 pr-9 text-gray-900">
                                    <span class="block truncate font-normal">{{$project->name}}</span>
                                    <input type="checkbox" id="{{$project->id}}.project" class="hidden" value="{{$project->id}}" wire:model.live="projects">
                                    @if(in_array($project->id, $projects))
                                    <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    @endif
                                </li>
                            </label>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            {{-- SKills DD--}}
            <div class="px-4 py-3.5 text-left text-sm text-gray-900 print:hidden col-span-4">
                <div x-data="{skills : false}">
                    <label id="listbox-label" class="block text-sm font-md leading-6 text-gray-900">Select your Skills</label>
                    <div class="relative mt-2">
                        <button x-on:click="skills = true" type="button" class="relative w-full cursor-pointer rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                            <input wire:model.live="skillSearch" type="text" class="w-full p-0 border-0 text-xs focus:ring-0" placeholder="Search Skills">
                        <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        </button>
                        <ul x-show="skills" x-on:click.outside="skills = false" class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                            @foreach ($skillsDD as $skill) 
                            <label for="{{$skill->id}}.skill">
                                <li for="{{$skill->id}}.skill" class="relative cursor-pointer hover:bg-gray-200 py-2 pl-3 pr-9 text-gray-900">
                                    <span class="block truncate font-normal">{{$skill->name}}</span>
                                    <input type="checkbox" id="{{$skill->id}}.skill" class="hidden" value="{{$skill->id}}" wire:model.live="skills">
                                    @if(in_array($skill->id, $skills))
                                    <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    @endif
                                </li>
                            </label>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            {{-- Languages DD--}}
            <div class="px-4 py-3.5 text-left text-sm text-gray-900 print:hidden col-span-4">
                <div x-data="{languages : false}">
                    <label id="listbox-label" class="block text-sm font-md leading-6 text-gray-900">Select Your Languages</label>
                    <div class="relative mt-2">
                        <button x-on:click="languages = true" type="button" class="relative w-full cursor-pointer rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                            <input wire:model.live="languageSearch" type="text" class="w-full p-0 border-0 text-xs focus:ring-0" placeholder="Search Languages">
                        <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        </button>
                        <ul x-show="languages" x-on:click.outside="languages = false" class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                            @foreach ($languagesDD as $language) 
                            <label for="{{$language->id}}.language">
                                <li for="{{$language->id}}.language" class="relative cursor-pointer hover:bg-gray-200 py-2 pl-3 pr-9 text-gray-900">
                                    <span class="block truncate font-normal">{{$language->name}}</span>
                                    <input type="checkbox" id="{{$language->id}}.language" class="hidden" value="{{$language->id}}" wire:model.live="languages">
                                    @if(in_array($language->id, $languages))
                                    <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    @endif
                                </li>
                            </label>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            </div>
            
            @if ($ResumeTemplate == 'AI')
            {{-- First Template --}}
            <livewire:ai-resume :selectedPersonal="$selectedPersonal" :resumeColor="$resumeColor" :resumeBorder="$resumeBorder" :resumeBg="$resumeBg" :resumeText="$resumeText" :selectedEducations="$selectedEducations" :selectedExperiences="$selectedExperiences" :selectedSkills="$selectedSkills" :selectedProjects="$selectedProjects" :selectedLanguages="$selectedLanguages" wire:key="ai-resume"/>
            {{-- Second Template --}}
            @elseif($ResumeTemplate == 'Edinburg')
             <livewire:edinburg :selectedPersonal="$selectedPersonal" :resumeColor="$resumeColor" :resumeBorder="$resumeBorder" :resumeBg="$resumeBg" :resumeText="$resumeText" :selectedEducations="$selectedEducations" :selectedExperiences="$selectedExperiences" :selectedSkills="$selectedSkills" :selectedProjects="$selectedProjects" :selectedLanguages="$selectedLanguages" wire:key="edinburg"/>
             @endif
            {{-- Buttons --}}
            <div class="pt-4 mr-4 justify-end flex space-x-2 sm:pr-0 print:hidden col-span-12">
                <x-button wire:click="SaveResume">{{$resume ? 'Update' : 'Submit'}}</x-button>
                <a href="{{route('resumes.index')}}">
                    <x-danger-button >Cancel</x-danger-button>
                </a>
            </div>
            @if (isset($resume))
            <x-danger-button class="w-full mt-4 print:hidden col-span-12" wire:click="DeleteResume" wire:confirm="Are you sure you want to delete this Resume">Delete Resume</x-danger-button>
            @endif
        </div>
    </div>
</div>
</div>