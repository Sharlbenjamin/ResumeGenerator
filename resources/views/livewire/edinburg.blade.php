<div class="bg-white rounded-md m-2">
    <div class="grid grid-cols-10">
        {{-- Side Bar --}}
        <div class="col-span-3 p-4 bg-{{$resumeColor}}-800 print:bg-gray-700 space-y-4">
            <div class="">
                <h2 class="text-white font-bold pt-4 pl-4">Personal</h2>
                <div class="border ml-4"></div>
            </div>
            {{-- name --}}
            <div class="pl-4 pr-4">
                <h2 class="text-white font-bold">Name</h2>
                <h2 class="text-white">{{$personal->first_name}} {{$personal->middle_name}} {{$personal->last_name}} </h2>
            </div>
            {{-- Email --}}
            <div class="pt-4 pl-4 pr-4">
                <h2 class="text-white font-bold">Email</h2>
                <p class="text-white text-wrap text-xs">{{$personal->email}}</p>
            </div>
            {{-- phones --}}
            <div class="pt-4 pl-4 pr-4">
                <h2 class="text-white font-bold">Phone Number</h2>
                <p class="text-white">+2{{$personal->first_phone}}</p>
                <p class="text-white text-wrap">+34{{$personal->second_phone}}</p>
            </div>
            {{-- Links --}}
            <div class="pt-4 pl-4 pr-4">
                <h2 class="text-white font-bold">Links</h2>
                <p class="text-blue-400 font-medium underline-offset-1 underline"><a href="{{$personal->linked_id}}">Linked In</a></p>
                <p class="text-blue-400 font-medium underline-offset-1 underline"><a href="{{$personal->github}}">Github</a></p>
                <p class="text-blue-400 font-medium underline-offset-1 underline"><a href="{{$personal->behance}}">Behance</a></p>
                <p class="text-blue-400 font-medium underline-offset-1 underline"><a href="{{$personal->instagram}}">Instagram</a></p>
                <p class="text-blue-400 font-medium underline-offset-1 underline"><a href="{{$personal->facebook}}">Facebook</a></p>
            </div>
            {{-- address --}}
            <div class="pl-4 pr-4">
                <h2 class="text-white font-bold">Address</h2>
                <h4 class="text-white text-wrap">{{$personal->address}}</h4>
            </div>
            {{-- Gender --}}
            <div class="pt-4 pl-4 pr-4">
                <h2 class="text-white font-bold">Gender</h2>
                <p class="text-white text-wrap text-xs">{{$personal->gender}}</p>
            </div>
            {{-- nationality --}}
            <div class="pt-4 pl-4 pr-4">
                <h2 class="text-white font-bold">Nationality</h2>
                <p class="text-white text-wrap text-xs">{{$personal->nationality}}</p>
            </div>
            {{-- Marital Status --}}
            <div class="pt-4 pl-4 pr-4">
                <h2 class="text-white font-bold">Marital Status</h2>
                <p class="text-white text-wrap text-xs">{{$personal->marital_status}}</p>
            </div>
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
        <div class="col-span-7 space-y-4 p-4">
            <h2 class="text-3xl font-serif">{{$personal->first_name}}
                <span class="font-bold">
                    {{$personal->last_name}}
                </span>
            </h2>
            <div class="border-b">
                <p class="text-md font-bold">
                    {{$personal->title}}
                 </p>
            </div>
            <div class="text-sm">
                {{$personal->summary}}
            </div>
            <div class="border-b">
                <p class="text-md font-bold">
                    Educations
                </p>
            </div>
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
            <div class="border-b">
                <p class="text-md font-bold">
                    Experiences
                </p>
            </div>
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
            <div class="border-b">
                <p class="text-md font-bold">
                    Skills
                </p>
            </div>
            @foreach ($selectedSkills as $skill)
            <div class="grid grid-cols-3">
                <p class="text-wrap text-xs">{{$skill->name}}</p>
                <div class="my-auto">
                    <div class="rounded-full bg-gray-200">
                        @if ($skill->level == 'Beginner')
                        <div class="border-2 rounded-full border-{{$resumeColor}}-700" style="width: 25%"></div>
                        @elseif($skill->level == 'Intermediate')
                        <div class="border-2 rounded-full border-{{$resumeColor}}-700" style="width: 50%"></div>
                        @elseif($skill->level == 'Advanced')
                        <div class="border-2 rounded-full border-{{$resumeColor}}-700" style="width: 75%"></div>
                        @elseif($skill->level == 'Expert')
                        <div class="border-2 rounded-full border-{{$resumeColor}}-700" style="width: 100%"></div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>