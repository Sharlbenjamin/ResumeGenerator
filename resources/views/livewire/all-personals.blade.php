<div class="grid grid-cols-12">
    <div class="col-span-12">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
              <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">Personals</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all Your Personal Data</p>
              </div>
              <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <a href="{{route('personals.create')}}" class="block rounded-md bg-sky-600 px-3 py-2 text-center text-sm font-bold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">Add Personal Data</a>
              </div>
            </div>
            <div class="mt-8 flow-root">
              <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                  <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                      <tr class="divide-x divide-gray-200">
                        <th scope="col" class="py-3.5 pl-4 pr-4 text-left text-sm font-semibold text-gray-900 sm:pl-0">First Name</th>
                        <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">Last Name</th>
                        <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">Middle Name</th>
                        <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">Phones</th>
                        <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                        <th scope="col" class="text-right text-sm font-semibold text-gray-900 sm:pr-0">Edit</th>
                      </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                    @if (isset($personal->id))      
                      <tr class="divide-x divide-gray-200">
                          <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm font-medium text-gray-900 sm:pl-0">{{$personal->first_name}}</td>
                          <td class="whitespace-nowrap p-4 text-sm text-gray-500">{{$personal->last_name}}</td>
                          <td class="whitespace-nowrap p-4 text-sm text-gray-500">{{$personal->middle_name}}</td>
                          <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                            <p>{{$personal->first_phone}}</p>
                            <p>{{$personal->second_phone}}</p>
                          </td>
                          <td class="whitespace-nowrap p-4 text-sm text-gray-500">{{$personal->email}}</td>
                          <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-right text-sky-500 sm:pr-0">
                            <a href="{{route('personals.edit', $personal->id)}}">Edit</a>
                          </td>
                        </tr>
                    @else
                    <tr class="divide-x divide-gray-200">
                        <td colspan="5" class="whitespace-nowrap py-4 pl-4 text-center pr-4 text-xl font-medium text-sky-800 sm:pl-0">No Personals Added Yet Please 
                            <a href="{{route('personals.create')}}" class="underline underline-offset-2">Add Personal Data</a>
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