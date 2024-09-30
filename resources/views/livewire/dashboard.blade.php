<div class="space-y-4">
    <div class="pt-12 pb-4">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <h2 class="m-6 text-teal-800 font-bold">Welcome {{$user->name}}</h2>
                <livewire:all-personals>
                </div>
            </div>
        </div>
    <div class="pt-4 pb-4">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <livewire:education-list>
            </div>
        </div>
    </div>
    <div class="pt-4 pb-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <livewire:experience-list>
            </div>
        </div>
    </div>
    <div class="pt-4 pb-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <livewire:projects-list>
            </div>
        </div>
    </div>
    <div class="pt-4 pb-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <livewire:skills-list>
            </div>
        </div>
    </div>
    <div class="pt-4 pb-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <livewire:languages-list>
            </div>
        </div>
    </div>
</div>
