
    <div class="grid grid-cols-12">
        <div class="col-span-12">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                  <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold leading-6 text-gray-900">Resumes</h1>
                    <p class="mt-2 text-sm text-center text-gray-700">A list of all Your Resumes</p>
                  </div>
                  <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                    <a href="{{route('resumes.create')}}" class="block rounded-md bg-sky-600 px-3 py-2 text-center text-sm text-center font-bold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">Make a New Resume</a>
                  </div>
                </div>
                <div class="mt-8 flow-root">
                  <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                      <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                          <tr class="divide-x divide-gray-200">
                            <th scope="col" class="py-3.5 pl-4 pr-4 text-center text-sm text-center font-semibold text-gray-900 sm:pl-0">Resume Name</th>
                            <th scope="col" class="py-3.5 pl-4 pr-4 text-center text-sm text-center font-semibold text-gray-900 sm:pl-0">Education</th>
                            <th scope="col" class="py-3.5 pl-4 pr-4 text-center text-sm text-center font-semibold text-gray-900 sm:pl-0">Experience</th>
                            <th scope="col" class="py-3.5 pl-4 pr-4 text-center text-sm text-center font-semibold text-gray-900 sm:pl-0">Projects</th>
                            <th scope="col" class="py-3.5 pl-4 pr-4 text-center text-sm text-center font-semibold text-gray-900 sm:pl-0">Skills</th>
                            <th scope="col" class="py-3.5 pl-4 pr-4 text-center text-sm text-center font-semibold text-gray-900 sm:pl-0">Languages</th>
                            <th scope="col" class="text-right text-sm text-center font-semibold text-gray-900 sm:pr-0">Edit</th>
                          </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                        @if (isset($resumes))
                        @foreach ($resumes as $resume)
                        <tr class="divide-x divide-gray-200">
                            <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-center font-medium text-gray-900 sm:pl-0">{{$resume->name}}</td>
                            <td class="text-wrap p-4 text-sm text-center text-gray-500 max-w-40">{{$resume->educations->count()}}</td>
                            <td class="text-wrap p-4 text-sm text-center text-gray-500 max-w-40">{{$resume->experiences->count()}}</td>
                            <td class="text-wrap p-4 text-sm text-center text-gray-500 max-w-40">{{$resume->projects->count()}}</td>
                            <td class="text-wrap p-4 text-sm text-center text-gray-500 max-w-40">{{$resume->skills->count()}}</td>
                            <td class="text-wrap p-4 text-sm text-center text-gray-500 max-w-40">{{$resume->languages->count()}}</td>
                            <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-center text-right text-sky-500 sm:pr-0">
                                <a href="{{route('resumes.edit', $resume->id)}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach   
                        @else
                        <tr class="divide-x divide-gray-200">
                            <td colspan="7" class="whitespace-nowrap py-4 pl-4 text-center pr-4 text-xl font-medium text-sky-800 sm:pl-0">No Resumes Added Yet Please 
                                <a href="{{route('resumes.create')}}" class="underline underline-offset-2">Click here to make a new resume</a>
                            </td>
                        </tr>
                        @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>    
        </div>
    </div>
