<div class="max-w-xl mx-auto p-4 border-2 rounded-md m-2">
    <div class="px-4 py-3.5 text-left text-sm text-gray-900">
        <p>Skill Name</p>
        <x-input wire:model.live="name" class="w-full hover:border-sky-400 border-2"></x-input>
    </div>
    <div class="px-4 py-3.5 text-left text-sm text-gray-900">
        <p>Description</p>
        <select wire:model.live="level" class="w-full min-w-40 border-2 rounded-md border-gray-200 hover:border-sky-400">
            <option value="">Select Level</option>
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Advanced">Advanced</option>
            <option value="Expert">Expert</option>
        </select>
    </div>
    <div class="pt-4 mr-4 justify-end flex space-x-2 sm:pr-0">
        <x-button wire:click="SaveSkill">{{$skill ? 'Update' : 'Submit'}}</x-button>
        <a href="{{url()->previous()}}">
            <x-danger-button >Cancel</x-danger-button>
        </a>
    </div>
    @if (isset($skill))
    <x-danger-button class="w-full mt-4" wire:click="DeleteSkill" wire:confirm="Are you sure you want to delete this Skill">Delete</x-danger-button>
    @endif
</div>
