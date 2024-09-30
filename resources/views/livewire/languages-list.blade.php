<div class="grid grid-cols-12">
    <div class="col-span-12">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
              <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">Languages</h1>
                <p class="mt-2 text-sm text-center text-gray-700">A list of all Your Languages</p>
              </div>
              <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <a href="{{route('languages.create')}}" class="block rounded-md bg-sky-600 px-3 py-2 text-center text-sm text-center font-bold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">Add Language</a>
              </div>
            </div>
            <div class="mt-8 flow-root">
              <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                  <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                      <tr class="divide-x divide-gray-200">
                        <th scope="col" class="py-3.5 pl-4 pr-4 text-center text-sm text-center font-semibold text-gray-900 sm:pl-0">Name</th>
                        <th scope="col" class="py-3.5 pl-4 pr-4 text-center text-sm text-center font-semibold text-gray-900 sm:pl-0">Level</th>
                        <th scope="col" class="text-right text-sm text-center font-semibold text-gray-900 sm:pr-0">Edit</th>
                      </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                    @if (isset($languages))
                    @foreach ($languages as $language)
                    <tr class="divide-x divide-gray-200">
                        <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-center font-medium text-gray-900 sm:pl-0">{{$language->name}}</td>
                        <td class="whitespace-nowrap p-4 text-sm text-center text-gray-500">{{$language->level}}</td>
                        <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-center text-right text-sky-500 sm:pr-0">
                            <a href="{{route('languages.edit', $language->id)}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach   
                    @else
                    <tr class="divide-x divide-gray-200">
                        <td colspan="5" class="whitespace-nowrap py-4 pl-4 text-center pr-4 text-xl font-medium text-sky-800 sm:pl-0">No Languages Added Yet Please 
                            <a href="{{route('languages.create')}}" class="underline underline-offset-2">Add Language</a>
                        </td>
                    </tr>
                    @endif
                    <tr>
                      <td colspan="1" class="py-3.5 pl-4 pr-4 text-sm text-left text-gray-900 sm:pl-0">
                          <p>Language Name</p>
                          <select wire:model.live="name" class="w-full min-w-40 border-2 rounded-md border-gray-200 hover:border-sky-400">
                            <option value="">Select Language</option>
                            <option value="English">English</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Arabic">Arabic</option>
                            <option value="French">French</option>
                            <option value="German">German</option>
                          </select>
                      </td>
                      <td colspan="1" class="px-4 py-3.5 text-sm text-left text-gray-900">
                          <p>Level</p>
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
                      </td>
                      <td rowspan="2" colspan="2" class="text-center sm:pr-0">
                          <x-button wire:click="CreateLanguage">Submit</x-button>
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