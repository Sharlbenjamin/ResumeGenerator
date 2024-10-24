<div class="bg-white rounded-md m-2">
    <div class="grid grid-cols-10">
        {{-- Side Bar --}}
        <div class="col-span-3 p-4 space-y-4 {{$resumeBg}}">
            <div class="">
                <h2 class="text-white font-bold pt-4 pl-4">Personal</h2>
                <div class="border ml-4"></div>
            </div>
            {{-- name --}}
            @if(isset($selectedPersonal->id))
            <div class="pl-4 pr-4">
                <h2 class="text-white font-bold">Name</h2>
                <h2 class="text-white">{{$selectedPersonal->first_name}} {{$selectedPersonal->middle_name}} {{$selectedPersonal->last_name}} </h2>
            </div>
            {{-- Email --}}
            <div class="pt-4 pl-4 pr-4">
                <h2 class="text-white font-bold">Email</h2>
                <p class="text-white text-wrap text-xs">{{$selectedPersonal->email}}</p>
            </div>
            {{-- phones --}}
            <div class="pt-4 pl-4 pr-4">
                <h2 class="text-white font-bold">Phone Number</h2>
                <p class="text-white">{{$selectedPersonal->first_phone}}</p>
                <p class="text-white text-wrap">{{$selectedPersonal->second_phone}}</p>
            </div>
            {{-- Links --}}
            <div class="pt-4 pl-4 pr-4">
                <h2 class="text-white font-bold">Links</h2>
                @if (isset($selectedPersonal->linked_in))
                <p class="text-blue-400 font-medium underline-offset-1 underline"><a href="{{$selectedPersonal->linked_in}}">Linked In</a></p>
                @endif
                @if (isset($selectedPersonal->github))
                <p class="text-blue-400 font-medium underline-offset-1 underline"><a href="{{$selectedPersonal->github}}">Github</a></p>
                @endif
                @if (isset($selectedPersonal->behance))
                <p class="text-blue-400 font-medium underline-offset-1 underline"><a href="{{$selectedPersonal->behance}}">Behance</a></p>
                @endif
                @if (isset($selectedPersonal->instagram))
                <p class="text-blue-400 font-medium underline-offset-1 underline"><a href="{{$selectedPersonal->instagram}}">Instagram</a></p>
                @endif
                @if (isset($selectedPersonal->facebook))
                <p class="text-blue-400 font-medium underline-offset-1 underline"><a href="{{$selectedPersonal->facebook}}">Facebook</a></p>
                @endif
            </div>
            {{-- address --}}
            <div class="pl-4 pr-4">
                <h2 class="text-white font-bold">Address</h2>
                <h4 class="text-white text-wrap">{{$selectedPersonal->address}}</h4>
            </div>
            {{-- Gender --}}
            <div class="pt-4 pl-4 pr-4">
                <h2 class="text-white font-bold">Gender</h2>
                <p class="text-white text-wrap text-xs">{{$selectedPersonal->gender}}</p>
            </div>
            {{-- nationality --}}
            <div class="pt-4 pl-4 pr-4">
                <h2 class="text-white font-bold">Nationality</h2>
                <p class="text-white text-wrap text-xs">{{$selectedPersonal->nationality}}</p>
            </div>
            {{-- Marital Status --}}
            <div class="pt-4 pl-4 pr-4">
                <h2 class="text-white font-bold">Marital Status</h2>
                <p class="text-white text-wrap text-xs">{{$selectedPersonal->marital_status}}</p>
            </div>
            @endif
            @if ($selectedLanguages->count() > 0)
            {{-- Languages --}}
            <div class="space-y-4 pr-4">
                <h2 class="text-white ml-4 font-bold">Languages</h2>
                <div class="border ml-4"></div>
                @foreach ($selectedLanguages as $language)
                <div class="ml-4 flex space-between-max">
                    <p class="text-white text-wrap text-xs">{{$language->name}}</p>
                    <p class="text-white text-wrap text-xs grow text-right">{{$language->level}}</p>
                </div>
                @endforeach
            </div>
            @endif
        </div>
        {{-- Main Column --}}
        @if(isset($selectedPersonal->id))
        <div class="col-span-7 space-y-4 p-4">
            <h2 class="text-3xl font-serif">{{$selectedPersonal->first_name}}
                <span class="font-bold">
                    {{$selectedPersonal->last_name}}
                </span>
                <br>
                <span class="text-lg">
                    {{$selectedPersonal->title}}
                </span>
            </h2>
            <div class="border-b-2 {{$resumeBorder}}">
                <p class="text-md font-bold {{$resumeText}}">
                    Summary
                 </p>
            </div>
            <div class="text-sm">
                {{$selectedPersonal->summary}}
            </div>
            @endif
            @if($selectedEducations->count() > 0)
            <div class="border-b-2 {{$resumeBorder}}">
                <p class="text-md font-bold {{$resumeText}} ">
                    Educations
                </p>
            </div>
            @endif
            @foreach ($selectedEducations as $education)
            <div class="">
                <div class="flex space-between-max">
                    <p class="text-wrap font-bold text-lg">{{$education->name}}</p>
                    <p class="text-wrap text-xs grow text-right">{{$education->date_from->format('M-Y')}} - {{$education->date_to->format('M-Y')}}</p>
                </div>
                <p class="text-wrap italic text-gray-500 text-md">{{$education->school}}</p>
                <p class="text-sm">
                    {{$education->description}}
                </p>
            </div>
            @endforeach
            @if($selectedExperiences->count() > 0)
            <div class="border-b-2 {{$resumeBorder}}">
                <p class="text-md font-bold {{$resumeText}}">
                    Experiences
                </p>
            </div>
            @endif
            @foreach ($selectedExperiences as $exp)
            <div class="">
                <div class="flex space-between-max">
                    <p class="text-wrap font-bold text-lg">{{$exp->company}}</p>
                    <p class="text-wrap text-xs grow text-right">{{$exp->date_from->format('M-Y')}} -{{$exp->date_to->format('M-Y')}}</p>
                </div>
                <p class="text-wrap italic text-gray-500 text-md">{{$exp->job_title}}</p>
                <p class="text-sm">
                    {{$exp->description}}
                </p>
            </div>
            @endforeach
            @if($selectedProjects->count() > 0)
            <div class="border-b-2 {{$resumeBorder}}">
                <p class="text-md font-bold {{$resumeText}}">
                    Projects
                </p>
            </div>
            @endif
            @foreach ($selectedProjects as $project)
            <div class="">
                <div class="flex space-between-max">
                    <p class="text-wrap font-bold text-lg">{{$project->name}}</p>
                    <p class="text-wrap text-xs grow text-right">{{$project->date->format('M-Y')}}</p>
                </div>
                <p class="text-sm">
                    {{$project->description}}
                </p>
            </div>
            @endforeach
            @if($selectedSkills->count() > 0)
            <div class="border-b-2 {{$resumeBorder}}">
                <p class="text-md font-bold {{$resumeText}}">
                    Skills
                </p>
            </div>
            @endif
            @foreach ($selectedSkills as $skill)
            <div class="grid grid-cols-3">
                <p class="text-wrap text-xs">{{$skill->name}}</p>
                <div class="my-auto">
                    <div class="rounded-full bg-gray-200">
                        @if ($skill->level == 'Beginner')
                        <div class="border-2 rounded-full {{$resumeBorder}}" style="width: 25%"></div>
                        @elseif($skill->level == 'Intermediate')
                        <div class="border-2 rounded-full {{$resumeBorder}}" style="width: 50%"></div>
                        @elseif($skill->level == 'Advanced')
                        <div class="border-2 rounded-full {{$resumeBorder}}" style="width: 75%"></div>
                        @elseif($skill->level == 'Expert')
                        <div class="border-2 rounded-full {{$resumeBorder}}" style="width: 100%"></div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>