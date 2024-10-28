<div class="">
    <div class="grid grid-cols-12 p-4">

    <div class="col-span-3 p-4">
        <div class="grid-cols-6 flex space-x-4">
            <h2 class="text-sky-600 font-bold col-span-2">First Name</h2>
            <input wire:model.live="first_name" class="w-full col-span-4 border-1 border-gray-300 rounded-md">
        </div>
    </div>
    <div class="col-span-6 p-4">
        <div class="grid-cols-6 flex space-x-4">
            <h2 class="text-sky-600 font-bold col-span-2">Middle Name</h2>
            <input wire:model.live="middle_name" class="w-full col-span-4 border-1  border-gray-300  rounded-md">
        </div>
    </div>
    <div class="col-span-3 p-4">
        <div class="grid-cols-6 flex space-x-4">
            <h2 class="text-sky-600 font-bold col-span-2">Last Name</h2>
            <input wire:model.live="last_name" class="w-full col-span-4 border-1  border-gray-300  rounded-md">
        </div>
    </div>
    <div class="col-span-6 grid grid-cols-6 items-center p-4">
        <h2 class="col-span-2 text-sky-600 font-bold">First Phone</h2>
        <div class="col-span-4 mt-2 -space-y-px rounded-md shadow-sm">
            <div>
                <label for="country" class="sr-only">Country</label>
                <select id="country" wire:model.live="first_phone_country_id" autocomplete="country-name" class="relative block w-full rounded-none rounded-t-md border-0 bg-transparent py-1.5 text-gray-900 ring-1  ring-gray-300 rounded-md focus:z-10 focus:ring-2 ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option>Country</option>
                    @foreach ($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="relative">
        <span class="absolute inset-y-0 left-0 flex items-center  pl-3 text-gray-500">{{$first_phone_country_id ? '+'.App\Models\Country::find($first_phone_country_id)->phonecode : '+'}}</span>
        <input type="text" wire:model.live="first_phone" id="postal-code" autocomplete="postal-code" class="relative block w-full rounded-none rounded-b-md border-0 bg-transparent py-1.5 pl-16 text-gray-900 ring-1  ring-gray-300 rounded-md placeholder:text-gray-400 ring-inset focus:z-10 focus:ring-2 focus: focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="First Phone Number">
    </div>
        </div>
    </div>
    <div class="col-span-6 grid grid-cols-6 items-center p-4">
        <h2 class="col-span-2 text-sky-600 font-bold">First Phone</h2>
        <div class="col-span-4 mt-2 -space-y-px rounded-md shadow-sm">
        <div>
                <label for="country" class="sr-only">Country</label>
                <select id="country" wire:model.live="second_phone_country_id" autocomplete="country-name" class="relative block w-full rounded-none rounded-t-md border-0 bg-transparent py-1.5 text-gray-900 ring-1  ring-gray-300 rounded-md focus:z-10 focus:ring-2 ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option>Country</option>
                    @foreach ($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="relative">
        <span class="absolute inset-y-0 left-0 flex items-center  pl-3 text-gray-500">{{$second_phone_country_id ? '+'.App\Models\Country::find($second_phone_country_id)->phonecode : '+'}}</span>
        <input type="text" wire:model.live="second_phone" id="postal-code" autocomplete="postal-code" class="relative block w-full rounded-none rounded-b-md border-0 bg-transparent py-1.5 pl-16 text-gray-900 ring-1 ring-inset ring-gray-300 rounded-md placeholder:text-gray-400 focus:z-10 focus:ring-2 focus: focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Second Phone Number">
    </div>
        </div>
    </div>
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">E-mail Address</h2>
        <input wire:model.live="email" class="col-span-8 w-full border-1  border-gray-300  rounded-md">
    </div>
    <h2 class="col-span-12 text-xl font-bold text-sky-600 mt-2 border-b-2 border-sky-600">Bio / About / Summary</h2>
    <div class="col-span-12 border-1  border-gray-300  rounded-md mb-4"></div>
    {{-- Bio / About --}}
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">About</h2>
        <textarea wire:model.live="summary" rows="5" class="col-span-8 rounded-md border-1  border-gray-300  rounded-md"></textarea>
    </div>
    <h2 class="col-span-12 text-xl font-bold text-sky-600 mt-2 border-b-2 border-sky-600">Job Title</h2>
    <div class="col-span-12 border-1  border-gray-300  rounded-md mb-4"></div>
    {{-- Job Title --}}
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">Title *</h2>
        <input wire:model.live="title" class="col-span-8 rounded-md border-1  border-gray-300  rounded-md">
    </div>
    <h2 class="col-span-12 text-xl font-bold text-sky-600 mt-2 border-b-2 border-sky-600">Other Personal Data</h2>
    <div class="col-span-12 border-1  border-gray-300  rounded-md mb-4"></div>
    {{-- Other Personal Data --}}
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">Address</h2>
        <textarea wire:model.live="address" rows="2" class="col-span-8 rounded-md border-1  border-gray-300  rounded-md"></textarea>
    </div>
    <div class="col-span-6 grid-cols-6 grid p-4">
        <h2 class="col-span-2 pt-2 text-sky-600 font-bold">Date of Birth</h2>
        <input wire:model.live="date_of_birth" type="date" class="col-span-3 w-full rounded-md border-1  border-gray-300  rounded-md">
    </div>
    <div class="col-span-6 grid-cols-6 grid p-4">
        <h2 class="col-span-2 pt-2 text-sky-600 font-bold">Nationality</h2>
        <input wire:model.live="nationality" class="col-span-3 w-full border-1  border-gray-300  rounded-md">
    </div>
    <div class="col-span-6 grid-cols-6 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">Gender</h2>
        <select wire:model.live="gender" class="col-span-3 w-full border-1  border-gray-300  rounded-md rounded">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
    </div>
    <div class="col-span-6 grid-cols-6 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">Marital State</h2>
        <select wire:model.live="marital_status" class="col-span-3 w-full border-1  border-gray-300  rounded-md rounded">
            <option value="">Select State</option>
            <option value="Married">Married</option>
            <option value="Single">Single</option>
        </select>
    </div>
    <h2 class="col-span-12 text-xl font-bold text-sky-600 mt-2 border-b-2 border-sky-600">Links</h2>
    <div class="col-span-12 border-1  border-gray-300  rounded-md mb-4"></div>
    {{-- Personal Links --}}
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">GitHub</h2>
        <input wire:model.live="github" class="col-span-8 w-full border-1  border-gray-300  rounded-md">
    </div>
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">Linked In</h2>
        <input wire:model.live="linked_in" class="col-span-8 w-full border-1  border-gray-300  rounded-md">
    </div>
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">Behance</h2>
        <input wire:model.live="behance" class="col-span-8 w-full border-1  border-gray-300  rounded-md">
    </div>
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">Facebook</h2>
        <input wire:model.live="facebook" class="col-span-8 w-full border-1  border-gray-300  rounded-md">
    </div>
    <div class="col-span-12 grid-cols-12 grid p-4">
        <h2 class="col-span-2  pt-2 text-sky-600 font-bold">Instagram</h2>
        <input wire:model.live="instagram" class="col-span-8 w-full border-1  border-gray-300  rounded-md">
    </div>

    {{-- Buttons --}}
    <div class="flex justify-end col-span-12 space-x-2 pt-4">
        <x-button wire:click="CreatePersonal">{{$personal ? 'Update' : 'Submit'}} </x-button>
            <a href="{{url()->previous()}}">
                <x-danger-button wire:click="DeletePersonal">Cancel</x-danger-button>
            </a>
    </div>
</div>
</div>