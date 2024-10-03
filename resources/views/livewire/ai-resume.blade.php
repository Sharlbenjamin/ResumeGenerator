<div class="p-4 border-2 rounded-md bg-white grid grid-cols-12">
{{-- selectedPersonal --}}
@if(isset($selectedPersonal->id))
<div class="px-4 text-left text-sm text-gray-900 col-span-12 grid grid-cols-12">
    <div class="col-span-12 mb-4">
        <h1 class="text-5xl">
            {{$selectedPersonal->first_name}}
            <span class="font-bold">{{$selectedPersonal->last_name}}</span>
        </h1>
    </div>
    <div class="col-span-4">
        <h3 class="font-bold text-xl text-{{$resumeColor}}-800">{{$selectedPersonal->title}}</h3>
        <h2 class="mt-2 font-medium text-md">
            <x-heroicon-o-phone class="inline h-4"/>
            {{$selectedPersonal->first_phone}}</h2>
        <h2 class="mt-2 font-medium text-md">
            <x-heroicon-o-phone class="inline h-4"/>
            {{$selectedPersonal->second_phone}}</h2>
    </div>
    @endif
    <div class="col-span-4 px-10">
        @if (isset($selectedPersonal->email))
        <h2 class="font-medium text-md">
            <x-heroicon-c-envelope-open class="h-4 inline "/>
            {{$selectedPersonal->email}}
        </h2>
            @endif
            @if (isset($selectedPersonal->nationality))
        <h2 class="font-medium text-md">
            <x-heroicon-o-user class="inline h-4"/>
            {{$selectedPersonal->nationality}}
        </h2>
            @endif
            @if (isset($selectedPersonal->date_of_birth))
        <h2 class="font-medium text-md">
            <x-heroicon-o-calendar class="inline h-4"/>
            {{$selectedPersonal->date_of_birth->format('d-m-Y')}}
        </h2>
        @endif
        </h2>
    </div>
    <div class="col-span-4 px-20 grid-cols-1 grid">
        @if (isset($selectedPersonal->linked_in))
        <a class="font-bold text-{{$resumeColor}}-700" href="{{$selectedPersonal->linked_in}}">Linked In</a>
        @endif
        @if (isset($selectedPersonal->github))
        <a class="font-bold text-{{$resumeColor}}-700" href="{{$selectedPersonal->github}}">GitHub</a>
        @endif
        @if (isset($selectedPersonal->behance))
        <a class="font-bold text-{{$resumeColor}}-700" href="{{$selectedPersonal->behance}}">Behance</a>
        @endif
        @if (isset($selectedPersonal->instagram))
        <a class="font-bold text-{{$resumeColor}}-700" href="{{$selectedPersonal->instagram}}">Instagram</a>
        @endif
        @if (isset($selectedPersonal->facebook))
        <a class="font-bold text-{{$resumeColor}}-700" href="{{$selectedPersonal->facebook}}">Facebook</a>
        @endif
    </div>
</div>
{{-- Summary --}}
@if (isset($selectedPersonal->summary))
<div class="px-4 py-3.5 text-left text-sm text-gray-900 col-span-12">
    <h2 class="text-xl text-{{$resumeColor}}-800 font-bold">Summary</h2>
    <div class="border w-full border-{{$resumeColor}}-700"></div>
    <h2 class="col-span-12 mt-2">{{$selectedPersonal->summary}}</h2>
</div>
@endif 
{{-- Experiences --}}
   @if ($selectedExperiences->count() > 0)
   <div class="px-4 py-3.5 text-left text-sm text-gray-900 col-span-12">
       <h2 class="text-xl text-{{$resumeColor}}-800 font-bold">Experiences</h2>
       <div class="border w-full border-{{$resumeColor}}-700"></div>
       @foreach ($selectedExperiences as $experience)
       <div class="mt-4 grid grid-cols-12">
           <p class="text-lg font-medium text-gray-900 col-span-6"><span class="text-md font-bold">{{$experience->job_title}}</span></p>
           <div class="col-span-3"></div>
           <p class="my-auto col-span-3">{{$experience->date_from->format('M Y')}} - {{$experience->date_to->format('M Y')}}</p>
           <h3 class="text-sm text-gray-500 col-span-5 italic">{{$experience->company}}</h3>
           <div class="col-span-7"></div>
           <h2 class="col-span-12 mt-2">{{$experience->description}}</h2>
       </div>
       @endforeach
   </div>
   @endif
   {{-- Education --}}
   @if ($selectedEducations->count() > 0)
   <div class="px-4 py-3.5 text-left text-sm text-gray-900 col-span-12">
   <h2 class="text-xl text-{{$resumeColor}}-800 font-bold">Educations & Qualifications</h2>
   <div class="border w-full border-{{$resumeColor}}-700"></div>
   @foreach ($selectedEducations as $education)
   <div class="mt-4 grid grid-cols-12">
       <p class="text-lg font-medium text-gray-900 col-span-6"><span class="text-md font-bold">{{$education->name}}</span>: {{$education->level}}</p>
       <div class="col-span-3"></div>
       <p class="my-auto col-span-3">{{$education->date_from->format('M Y')}} - {{$education->date_to->format('M Y')}}</p>
       <h3 class="text-sm text-gray-500 col-span-5 italic">{{$education->school}}</h3>
       <div class="col-span-7"></div>
       <h2 class="col-span-12 mt-2">{{$education->description}}</h2>
   </div>
   @endforeach
   </div>
   @endif
   {{-- Projects --}}
   @if ($selectedProjects->count() > 0)
   <div class="px-4 py-3.5 text-left text-sm text-gray-900 col-span-12">
       <h2 class="text-xl text-{{$resumeColor}}-800 font-bold">Projects & Qualifications</h2>
       <div class="border w-full border-{{$resumeColor}}-700"></div>
       @foreach ($selectedProjects as $project)
       <div class="mt-4 grid grid-cols-12">
           <p class="text-lg font-medium text-gray-900 col-span-6"><span class="text-md font-bold">{{$project->name}}</span></p>
           <div class="col-span-3"></div>
           <p class="my-auto col-span-3">{{$project->date->format('M Y')}}</p>
           <h3 class="text-sm text-gray-500 col-span-5 italic">{{$project->school}}</h3>
           <div class="col-span-7"></div>
           <h2 class="col-span-12 mt-2">{{$project->description}}</h2>
       </div>
       @endforeach
   </div>
   @endif
   {{-- SKills --}}
   @if ($selectedSkills->count() > 0)
   <div class="px-4 py-3.5 text-left text-sm text-gray-900 col-span-12">
   <h2 class="text-xl text-{{$resumeColor}}-800 font-bold">Skills</h2>
   <div class="border w-full border-{{$resumeColor}}-700"></div>
   @foreach ($selectedSkills as $skill)
   <div class="mt-4 grid grid-cols-12">
       <p class="text-lg font-medium text-gray-900 col-span-6"><span class="text-lg font-bold">{{$skill->name}}</span>: {{$skill->level}}</p>
       <div class="my-auto col-span-4">
           <div class=" rounded-full bg-gray-200">
               @if ($skill->level == 'Beginner')
               <div class="border-4 rounded-full border-gray-700" style="width: 25%"></div>
               @endif
               @if ($skill->level == 'Intermediate')
               <div class="border-4 rounded-full border-gray-700" style="width: 50%"></div>
               @endif
               @if ($skill->level == 'Advanced')
               <div class="border-4 rounded-full border-gray-700" style="width: 75%"></div>
               @endif
               @if ($skill->level == 'Expert')
               <div class="border-4 rounded-full border-gray-700" style="width: 100%"></div>
               @endif
           </div>
       </div>
   </div>
   @endforeach
   </div>
   @endif
   {{-- Languages --}}
   @if ($selectedLanguages->count() > 0)
   <div class="px-4 py-3.5 text-left text-sm text-gray-900 col-span-12">
   <h2 class="text-xl text-{{$resumeColor}}-800 font-bold">Languages</h2>
   <div class="border w-full border-{{$resumeColor}}-700"></div>
   <div class="mt-1 grid grid-cols-12">
   @foreach ($selectedLanguages as $language)
       <p class="text-lg font-medium text-gray-900 col-span-6"><span class="text-lg font-bold">{{$language->name}}</span>: {{$language->level}}</p>
       @endforeach
   </div>
   </div>
   @endif
</div>