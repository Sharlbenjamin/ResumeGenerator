<div class="bg-white rounded-md m-2">
    {{-- Personal Data Section (Full Width) --}}
    @if(isset($selectedPersonal->id))
    <div class="p-4  text-black">
        <h2 class="text-3xl font-serif">
            {{$selectedPersonal->first_name}}
            <span class="font-bold">{{$selectedPersonal->last_name}}</span>
        </h2>
        <p class="text-lg">{{$selectedPersonal->title}}</p>
        <div class="grid grid-cols-3 gap-4 mt-4">
            <div>
                <p class="font-bold">Email</p>
                <p class="text-sm">{{$selectedPersonal->email}}</p>
            </div>
            <div>
                <p class="font-bold">Phone</p>
                <p class="text-sm">{{$selectedPersonal->first_phone}}</p>
                @if($selectedPersonal->second_phone)
                    <p class="text-sm">{{$selectedPersonal->second_phone}}</p>
                @endif
            </div>
            <div>
                <p class="font-bold">Address</p>
                <p class="text-sm">{{$selectedPersonal->address}}</p>
            </div>
        </div>
        <div class="mt-4">
            <p class="font-bold">Links</p>
            <div class="flex space-x-4">
                @if (isset($selectedPersonal->linked_in))
                <a href="{{$selectedPersonal->linked_in}}" class="text-blue-600 underline">LinkedIn</a>
                @endif
                @if (isset($selectedPersonal->github))
                <a href="{{$selectedPersonal->github}}" class="text-blue-600 underline">GitHub</a>
                @endif
                @if (isset($selectedPersonal->behance))
                <a href="{{$selectedPersonal->behance}}" class="text-blue-600 underline">Behance</a>
                @endif
                @if (isset($selectedPersonal->instagram))
                <a href="{{$selectedPersonal->instagram}}" class="text-blue-600 underline">Instagram</a>
                @endif
                @if (isset($selectedPersonal->facebook))
                <a href="{{$selectedPersonal->facebook}}" class="text-blue-600 underline">Facebook</a>
                @endif
            </div>
        </div>
        @endif
        
    </div>
    <div class="border-b-2 {{$resumeBorder}}">
    </div>
        <div class="grid grid-cols-10">
        {{-- Skills and Languages Column --}}
        <div class="col-span-3 p-4 space-y-4 {{$resumeBg}}">
            @if($selectedSkills->count() > 0)
            <div class="border-b-2 {{$resumeBorder}}">
                <p class="text-md font-bold text-black">Skills</p>
            </div>
            @foreach ($selectedSkills as $skill)
            <div class="grid grid-cols-3">
                <p class="text-wrap text-xs text-black font-bold">{{$skill->name}}</p>
                <div class="col-span-2 my-auto">
                    <div class="rounded-full bg-gray-200">
                        @if ($skill->level == 'Beginner')
                        <div class="border-2 rounded-full border-gray-900" style="width: 25%"></div>
                        @elseif($skill->level == 'Intermediate')
                        <div class="border-2 rounded-full border-gray-900" style="width: 50%"></div>
                        @elseif($skill->level == 'Advanced')
                        <div class="border-2 rounded-full border-gray-900" style="width: 75%"></div>
                        @elseif($skill->level == 'Expert')
                        <div class="border-2 rounded-full border-gray-900" style="width: 100%"></div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
            @endif

            @if ($selectedLanguages->count() > 0)
            <div class="border-b-2 {{$resumeBorder}} mt-6">
                <p class="text-md text-black font-bold ">Languages</p>
            </div>
            @foreach ($selectedLanguages as $language)
            <div class="flex justify-between">
                <p class="text-wrap text-xs text-black font-bold">{{$language->name}}</p>
                <p class="text-wrap text-xs text-black font-bold">{{$language->level}}</p>
            </div>
            @endforeach
            @endif
        </div>

        {{-- Main Column --}}
        <div class="col-span-7 space-y-4 p-4">
            @if(isset($selectedPersonal->id))
            <div class="border-b-2 {{$resumeBorder}}">
                <p class="text-md font-bold {{$resumeText}}">Summary</p>
            </div>
            <div class="text-sm text-black">
                {{$selectedPersonal->summary}}
            </div>
            @endif

            @if($selectedEducations->count() > 0)
            <div class="border-b-2 {{$resumeBorder}}">
                <p class="text-md font-bold {{$resumeText}}">Education</p>
            </div>
            @foreach ($selectedEducations as $education)
            <div class="">
                <div class="flex justify-between">
                    <p class="font-bold text-lg text-black">{{$education->name}}</p>
                    <p class="text-xs text-black">{{$education->date_from->format('M-Y')}} - {{$education->date_to->format('M-Y')}}</p>
                </div>
                <p class="italic text-gray-600">{{$education->school}}</p>
                <p class="text-sm text-black">{{$education->description}}</p>
            </div>
            @endforeach
            @endif

            @if($selectedExperiences->count() > 0)
            <div class="border-b-2 {{$resumeBorder}}">
                <p class="text-md font-bold {{$resumeText}}">Experience</p>
            </div>
            @foreach ($selectedExperiences as $exp)
            <div class="">
                <div class="flex justify-between">
                    <p class="font-bold text-lg text-black">{{$exp->company}}</p>
                    <p class="text-xs text-black">{{$exp->date_from->format('M-Y')}} - {{$exp->date_to->format('M-Y')}}</p>
                </div>
                <p class="italic text-gray-600">{{$exp->job_title}}</p>
                <p class="text-sm text-black">{{$exp->description}}</p>
            </div>
            @endforeach
            @endif

            @if($selectedProjects->count() > 0)
            <div class="border-b-2 {{$resumeBorder}}">
                <p class="text-md font-bold {{$resumeText}}">Projects</p>
            </div>
            @foreach ($selectedProjects as $project)
            <div class="">
                <div class="flex justify-between">
                    <p class="font-bold text-lg text-black">{{$project->name}}</p>
                    <p class="text-xs text-black">{{$project->date->format('M-Y')}}</p>
                </div>
                <p class="text-sm text-black">{{$project->description}}</p>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>