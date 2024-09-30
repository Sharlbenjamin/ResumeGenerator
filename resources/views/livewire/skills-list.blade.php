<div class="grid grid-cols-12">
    <div class="col-span-12">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
              <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">Skills</h1>
                <p class="mt-2 text-sm text-center text-gray-700">A list of all Your Skills</p>
              </div>
              <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <a href="{{route('skills.create')}}" class="block rounded-md bg-sky-600 px-3 py-2 text-center text-sm text-center font-bold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">Add Skill</a>
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
                    @if (isset($skills))
                    @foreach ($skills as $skill)
                    <tr class="divide-x divide-gray-200">
                        <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-center font-medium text-gray-900 sm:pl-0">{{$skill->name}}</td>
                        <td class="whitespace-nowrap p-4 text-sm text-center text-gray-500">{{$skill->level}}</td>
                        <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-center text-right text-sky-500 sm:pr-0">
                            <a href="{{route('skills.edit', $skill->id)}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach   
                    @else
                    <tr class="divide-x divide-gray-200">
                        <td colspan="5" class="whitespace-nowrap py-4 pl-4 text-center pr-4 text-xl font-medium text-sky-800 sm:pl-0">No Skills Added Yet Please 
                            <a href="{{route('skills.create')}}" class="underline underline-offset-2">Add Skill Data</a>
                        </td>
                    </tr>
                    @endif
                    <tr>
                      <td colspan="1" class="py-3.5 pl-4 pr-4 text-sm text-left text-gray-900 sm:pl-0">
                          <p>Skill Name</p>
                          <x-input wire:model.live="name" class="w-full hover:border-sky-400 border-2"></x-input>
                      </td>
                      <td colspan="1" class="px-4 py-3.5 text-sm text-left text-gray-900">
                          <p>Level</p>
                            <select wire:model.live="level" class="w-full min-w-40 border-2 rounded-md border-gray-200 hover:border-sky-400">
                                <option value="">Select Level</option>
                                <option value="Beginner">Beginner</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Advanced">Advanced</option>
                                <option value="Expert">Expert</option>
                            </select>
                      </td>
                      <td rowspan="2" colspan="2" class="text-center sm:pr-0">
                          <x-button wire:click="CreateSkill">Submit</x-button>
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