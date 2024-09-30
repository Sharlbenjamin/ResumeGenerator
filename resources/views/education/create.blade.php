<x-app-layout>
    <x-slot name="header">
        Create a New Education 
    </x-slot>
    <div class="py-12">
        <div class="w-full max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (isset($education))
                <livewire:create-education :education="$education">
                    @else
                <livewire:create-education>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>