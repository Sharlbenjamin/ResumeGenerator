<div class="max-w-xl mx-auto p-4 border-2 rounded-md m-2">
    <div class="px-4 py-3.5 text-left text-sm text-gray-900">
        <p>Skill Name</p>
        <select wire:model.live="name" class="w-full min-w-40 border-2 rounded-md border-gray-200 hover:border-sky-400">
            <option value="">Select Language</option>
            <option value="English">English</option>
            <option value="Spanish">Spanish</option>
            <option value="Arabic">Arabic</option>
            <option value="French">French</option>
            <option value="German">German</option>
          </select>
    </div>
    <div class="px-4 py-3.5 text-left text-sm text-gray-900">
        <p>Description</p>
        <select wire:model.live="level" class="w-full min-w-40 border-2 rounded-md border-gray-200 hover:border-sky-400">
            <option value="">Select Level</option>
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="C1">C1</option>
            <option value="C2">C2</option>
            <option value="Working">Working</option>
            <option value="Fluent">Fluent</option>
            <option value="Native">Native</option>
        </select>
    </div>
    <div class="pt-4 mr-4 justify-end flex space-x-2 sm:pr-0">
        <x-button wire:click="SaveLanguage">{{$language ? 'Update' : 'Submit'}}</x-button>
        <a href="{{url()->previous()}}">
            <x-danger-button >Cancel</x-danger-button>
        </a>
    </div>
    @if (isset($skill))
    <x-danger-button class="w-full mt-4" wire:click="DeleteLanguage" wire:confirm="Are you sure you want to delete this Skill">Delete</x-danger-button>
    @endif
</div>
