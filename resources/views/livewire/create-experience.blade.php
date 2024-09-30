<div class="max-w-xl mx-auto p-4 border-2 rounded-md m-2">
    <div class="px-4 py-3.5 text-left text-sm text-gray-900">
        <p>Job Title</p>
        <x-input wire:model.live="job_title" class="w-full hover:border-sky-400 border-2"></x-input>
    </div>
    <div class="px-4 py-3.5 text-left text-sm text-gray-900">
        <p>Company</p>
        <x-input wire:model.live="company" class="w-full hover:border-sky-400 border-2"></x-input>
    </div>
    <div class="px-4 py-3.5 text-left text-sm  text-gray-900">
        <p>Start Date</p>
        <input wire:model.live="date_from" type="date" class="w-full border-2 rounded-md border-gray-200 hover:border-sky-400">
    </div>
    <div class="px-4 py-3.5 text-left text-sm text-gray-900">
        <p>End Date</p>
        <input wire:model.live="date_to" type="date" class="w-full border-2 rounded-md border-gray-200 hover:border-sky-400">
    </div>
    <div class="px-4 py-3.5 text-left text-sm text-gray-900">
        <p>Description</p>
        <textarea wire:model.live="description" type="date" class="w-full border-2 rounded-md border-gray-200 hover:border-sky-400"></textarea>
    </div>
    <div class="pt-4 mr-4 justify-end flex space-x-2 sm:pr-0">
        <x-button wire:click="SaveExperience">{{$experience ? 'Update' : 'Submit'}}</x-button>
        <a href="{{url()->previous()}}">
            <x-danger-button wire:click="SaveExperience">Cancel</x-danger-button>
        </a>
    </div>
    @if (isset($experience))
    <x-danger-button class="w-full mt-4" wire:click="DeleteExperience" wire:confirm="Are you sure you want to delete this Experience">Delete</x-danger-button>
    @endif
</div>
