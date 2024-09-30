<x-app-layout>
    <x-slot name="header">
        Perosnal Data
    </x-slot>
    <div class="py-12">
        <div class="max-w-5xl w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (isset($personal))   
                <livewire:create-personal :personal="$personal">
                @else
                <livewire:create-personal>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>