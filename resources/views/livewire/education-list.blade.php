<div class="grid grid-cols-12">
    <div class="col-span-12">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
              <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">Education</h1>
                <p class="mt-2 text-sm text-center text-gray-700">A list of all Your Educations</p>
              </div>
              <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <a href="{{route('education.create')}}" class="block rounded-md bg-sky-600 px-3 py-2 text-center text-sm text-center font-bold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">Add Education Data</a>
              </div>
            </div>
            <div class="mt-8 flow-root">
              <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                  <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                      <tr class="divide-x divide-gray-200">
                        <th scope="col" class="py-3.5 pl-4 pr-4 text-center text-sm text-center font-semibold text-gray-900 sm:pl-0">Major</th>
                        <th scope="col" class="px-4 py-3.5 text-center text-sm text-center font-semibold text-gray-900">School</th>
                        <th scope="col" class="px-4 py-3.5 text-center text-sm text-center font-semibold text-gray-900">Start Date</th>
                        <th scope="col" class="px-4 py-3.5 text-center text-sm text-center font-semibold text-gray-900">End Date</th>
                        <th scope="col" class="px-4 py-3.5 text-center text-sm text-center font-semibold text-gray-900">Description</th>
                        <th scope="col" class="text-right text-sm text-center font-semibold text-gray-900 sm:pr-0">Edit</th>
                      </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                    @if (isset($educations))
                    @foreach ($educations as $education)
                    <tr class="divide-x divide-gray-200">
                        <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-center font-medium text-gray-900 sm:pl-0">{{$education->name}}</td>
                        <td class="whitespace-nowrap p-4 text-sm text-center text-gray-500">{{$education->school}}</td>
                        <td class="whitespace-nowrap p-4 text-sm text-center text-gray-500">{{$education->date_from->format('d/m/Y')}}</td>
                        <td class="whitespace-nowrap p-4 text-sm text-center text-gray-500">{{$education->date_to->format('d/m/Y')}}</td>
                        <td class="text-wrap p-4 text-sm text-center text-gray-500 max-w-40">{{$education->description}}</td>
                        <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-center text-right text-sky-500 sm:pr-0">
                            <a href="{{route('education.edit', $education->id)}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach   
                    @else
                    <tr class="divide-x divide-gray-200">
                        <td colspan="5" class="whitespace-nowrap py-4 pl-4 text-left pr-4 text-xl font-medium text-sky-800 sm:pl-0">No Personals Added Yet Please 
                            <a href="{{route('education.create')}}" class="underline underline-offset-2">Add Education Data</a>
                        </td>
                    </tr>
                    @endif
                    <tr>
                      <td class="py-3.5 pl-4 pr-4 text-sm text-left text-gray-900 sm:pl-0">
                          <p>Major</p>
                          <x-input wire:model.live="name" class="w-full hover:border-sky-400 border-2"></x-input>
                      </td>
                      <td class="px-4 py-3.5 text-sm text-left text-gray-900">
                          <p>School</p>
                          <x-input wire:model.live="school" class="w-full hover:border-sky-400 border-2"></x-input>
                      </td>
                      <td class="px-4 py-3.5 text-sm text-left  text-gray-900">
                          <p>Start Date</p>
                          <input wire:model.live="date_from" type="date" class="w-full border-2 rounded-md border-gray-200 hover:border-sky-400">
                      </td>
                      <td class="px-4 py-3.5 text-sm text-left text-gray-900">
                          <p>End Date</p>
                          <input wire:model.live="date_to" type="date" class="w-full border-2 rounded-md border-gray-200 hover:border-sky-400">
                      </td>
                      <td rowspan="2" colspan="2" class="text-center sm:pr-0">
                          <x-button wire:click="CreateEducation">Submit</x-button>
                      </td>
                      </tr>
                      <tr>
                        <td colspan="4" class="text-center text-sm text-center pt-5 text-gray-900 sm:pr-0">
                          <p class="mb-1">Description</p>
                          <textarea iwre:model.live="description" class="w-full h-20 mb-4 rounded-md border-2 border-gray-200 hover:border-sky-400"></textarea>
                      </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
    </div>
</div>