<div class="max-w-xl mx-auto p-4 border-2 rounded-md m-2">
    <div class="px-4 py-3.5 text-left text-sm text-gray-900">
        <p>Job Title</p>
        <x-input wire:model.live="name" class="w-full hover:border-sky-400 border-2"></x-input>
    </div>
    <div class="px-4 py-3.5 text-left text-sm  text-gray-900">
        <p>Date</p>
        <input wire:model.live="date" type="date" class="w-full border-2 rounded-md border-gray-200 hover:border-sky-400">
    </div>
    <div class="px-4 py-3.5 text-left text-sm text-gray-900">
        <p>Description</p>
        <textarea wire:model.live="description" type="date" class="w-full border-2 rounded-md border-gray-200 hover:border-sky-400"></textarea>
    </div>
    <div class="pt-4 mr-4 justify-end flex space-x-2 sm:pr-0">
        <x-button wire:click="SaveProject">{{$project ? 'Update' : 'Submit'}}</x-button>
        <a href="{{url()->previous()}}">
            <x-danger-button wire:click="SaveExperience">Cancel</x-danger-button>
        </a>
    </div>
    @if (isset($project))
    <x-danger-button class="w-full mt-4" wire:click="DeleteProject" wire:confirm="Are you sure you want to delete this Prject">Delete</x-danger-button>
    @endif
</div>
