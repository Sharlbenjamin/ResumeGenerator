<div class="">
    <div class="grid grid-cols-12 p-4">

    <div class="col-span-3 p-4">
        <div class="grid-cols-6 flex space-x-4">
            <h2 class="text-sky-600 font-bold col-span-2">First Name</h2>
            <x-input wire:model.live="first_name" class="w-full col-span-4 hover:border-sky-400 border-2"></x-input>
        </div>
    </div>
    <div class="col-span-6 p-4">
        <div class="grid-cols-6 flex space-x-4">
            <h2 class="text-sky-600 font-bold col-span-2">Middle Name</h2>
            <x-input wire:model.live="middle_name" class="w-full col-span-4 hover:border-sky-400 border-2"></x-input>
        </div>
    </div>
    <div class="col-span-3 p-4">
        <div class="grid-cols-6 flex space-x-4">
            <h2 class="text-sky-600 font-bold col-span-2">Last Name</h2>
            <x-input wire:model.live="last_name" class="w-full col-span-4 hover:border-sky-400 border-2"></x-input>
        </div>
    </div>
    <div class="col-span-6 flex space-x-4 p-4">
        <h2 class="text-sky-600 font-bold col-span-6">First Phone</h2>
        <x-input wire:model.live="first_phone" class="col-span-6 w-full border-2 hover:border-sky-400"></x-input>
    </div>
    <div class="col-span-6 flex space-x-4 p-4">
        <h2 class="text-sky-600 font-bold col-span-6">Second Phone</h2>
        <x-input wire:model.live="second_phone" class="col-span-6 w-full border-2 hover:border-sky-400"></x-input>
    </div>
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">E-mail Address</h2>
        <x-input wire:model.live="email" class="col-span-8 w-full border-2 hover:border-sky-400"></x-input>
    </div>
    <h2 class="col-span-12 text-xl font-bold text-sky-600 mt-2">Bio / About / Summary</h2>
    <div class="col-span-12 border-gray-900 border mb-4"></div>
    {{-- Bio / About --}}
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">About</h2>
        <textarea wire:model.live="summary" rows="5" class="col-span-8 rounded-md border-gray-200 border-2 hover:border-sky-400"></textarea>
    </div>
    <h2 class="col-span-12 text-xl font-bold text-sky-600 mt-2">Job Title</h2>
    <div class="col-span-12 border-gray-900 border mb-4"></div>
    {{-- Job Title --}}
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">title</h2>
        <x-input wire:model.live="title" class="col-span-8 rounded-md border-gray-200 border-2 hover:border-sky-400"></x-input>
    </div>
    <h2 class="col-span-12 text-xl font-bold text-sky-600 mt-2">Other Personal Data</h2>
    <div class="col-span-12 border-gray-900 border mb-4"></div>
    {{-- Other Personal Data --}}
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">Address</h2>
        <textarea wire:model.live="address" rows="2" class="col-span-8 rounded-md border-gray-200 border-2 hover:border-sky-400"></textarea>
    </div>
    <div class="col-span-6 grid-cols-6 grid p-4">
        <h2 class="col-span-2 pt-2 text-sky-600 font-bold">Date of Birth</h2>
        <input wire:model.live="date_of_birth" type="date" class="col-span-3 w-full rounded-md border-gray-200 border-2 hover:border-sky-400">
    </div>
    <div class="col-span-6 grid-cols-6 grid p-4">
        <h2 class="col-span-2 pt-2 text-sky-600 font-bold">Nationality</h2>
        <x-input wire:model.live="nationality" class="col-span-3 w-full border-2 hover:border-sky-400"></x-input>
    </div>
    <div class="col-span-6 grid-cols-6 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">Gender</h2>
        <select wire:model.live="gender" class="col-span-3 w-full border-2 hover:border-sky-400 rounded border-gray-200">
            <option value="">Select Geneder</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
    </div>
    <div class="col-span-6 grid-cols-6 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">Marital State</h2>
        <select wire:model.live="marital_status" class="col-span-3 w-full border-2 hover:border-sky-400 rounded border-gray-200">
            <option value="">Select State</option>
            <option value="Married">Married</option>
            <option value="Single">Single</option>
        </select>
    </div>
    <h2 class="col-span-12 text-xl font-bold text-sky-600 mt-2">Links</h2>
    <div class="col-span-12 border-gray-900 border mb-4"></div>
    {{-- Personal Links --}}
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">GitHub</h2>
        <x-input wire:model.live="github" class="col-span-8 w-full border-2 hover:border-sky-400"></x-input>
    </div>
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">Linked In</h2>
        <x-input wire:model.live="linked_in" class="col-span-8 w-full border-2 hover:border-sky-400"></x-input>
    </div>
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">Behance</h2>
        <x-input wire:model.live="behance" class="col-span-8 w-full border-2 hover:border-sky-400"></x-input>
    </div>
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">Facebook</h2>
        <x-input wire:model.live="facebook" class="col-span-8 w-full border-2 hover:border-sky-400"></x-input>
    </div>
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">Instagram</h2>
        <x-input wire:model.live="instagram" class="col-span-8 w-full border-2 hover:border-sky-400"></x-input>
    </div>

    {{-- Buttons --}}
    <div class="flex justify-end col-span-12 space-x-2 pt-4">
        <x-button wire:click="CreatePersonal">{{$personal ? 'Update' : 'Submit'}} </x-danger-button>
            <a href="{{url()->previous()}}">
                <x-danger-button wire:click="DeletePersonal">Cancel</x-danger-button>
            </a>
    </div>
</div>
</div>