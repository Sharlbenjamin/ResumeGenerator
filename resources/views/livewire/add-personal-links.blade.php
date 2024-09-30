<div class="grid grid-cols-12 p-4">
    <div class="col-span-12 p-4">
        <div class="mt-4 space-x-4 flex grid grid-cols-6 ">
            <x-label class="col-span-2">First Name</x-label>
            <x-input class="w-full col-span-4 rounded-md border-gray-300" name="first_name"></x-input>
        </div>
        <div class="mt-4 space-x-4 flex grid grid-cols-6 ">
            <x-label class="col-span-2">Last Name</x-label>
            <x-input class="w-full col-span-4 rounded-md border-gray-300" name="last_name"></x-input>
        </div>
        <div class="mt-4 space-x-4 flex grid grid-cols-6 ">
            <x-label class="col-span-2">Middle Name</x-label>
            <x-input class="w-full col-span-4 rounded-md border-gray-300" name="middle_name"></x-input>
        </div>
        <div class="mt-4 space-x-4 flex grid grid-cols-6 ">
            <x-label class="col-span-2">First Phone</x-label>
            <x-input class="w-full col-span-4 rounded-md border-gray-300" name="first_phone"></x-input>
        </div>
        <div class="mt-4 space-x-4 flex grid grid-cols-6 ">
            <x-label class="col-span-2">Second Phone</x-label>
            <x-input class="w-full col-span-4 rounded-md border-gray-300" name="second_phone"></x-input>
        </div>
        <div class="mt-4 space-x-4 flex grid grid-cols-6 ">
            <x-label class="col-span-2">Email</x-label>
            <x-input class="w-full col-span-4 rounded-md border-gray-300" name="email"></x-input>
        </div>
        <div class="mt-4 space-x-4 flex grid grid-cols-6 ">
            <x-label class="col-span-2">Address</x-label>
            <x-input class="w-full col-span-4 rounded-md border-gray-300" name="address"></x-input>
        </div>
        <div class="mt-4 space-x-4 flex grid grid-cols-6 ">
            <x-label class="col-span-2">Date Of Birth</x-label>
            <input class="w-full col-span-4 rounded-md border-gray-300" type="date">
        </div>
        <div class="mt-4 space-x-4 flex grid grid-cols-6 ">
            <x-label class="col-span-2">Nationality</x-label>
            <select class="w-full col-span-4 rounded-md border-gray-300" name="nationality" id="">
                <option value="">Select Nationality</option>
                <option value="egyption">Egyption</option>
                <option value="spanish">Spanish</option>
                <option value="american">American</option>
            </select>
        </div>
        <div class="mt-4 space-x-4 flex grid grid-cols-6 ">
            <x-label class="col-span-2">Marital Status</x-label>
            <select class="w-full col-span-4 rounded-md border-gray-300" name="marital_status" id="">
                <option value="">Select Gender</option>
                <option value="0">Male</option>
                <option value="1">Female</option>
            </select>
        </div>
        <div class="mt-4 space-x-4 flex grid grid-cols-6 ">
            <x-label class="col-span-2">Gender</x-label>
            <x-input class="w-full col-span-4 rounded-md border-gray-300" name="gender"></x-input>
        </div>
        <div class="mt-4 space-x-4 flex grid grid-cols-6 ">
            <x-label class="col-span-2">GitHub Link</x-label>
            <x-input class="w-full col-span-4 rounded-md border-gray-300" name="github"></x-input>
        </div>
        <div class="mt-4 space-x-4 flex grid grid-cols-6 ">
            <x-label class="col-span-2">Linked In</x-label>
            <x-input class="w-full col-span-4 rounded-md border-gray-300" name="linked_id"></x-input>
        </div>
        <div class="mt-4 space-x-4 flex grid grid-cols-6 ">
            <x-label class="col-span-2">Instagram</x-label>
            <x-input class="w-full col-span-4 rounded-md border-gray-300" name="instagram"></x-input>
        </div>
        <div class="mt-4 space-x-4 flex grid grid-cols-6 ">
            <x-label class="col-span-2">Facebook</x-label>
            <x-input class="w-full col-span-4 rounded-md border-gray-300" name="facebook"></x-input>
        </div>
        <div class="mt-4 space-x-4 flex grid grid-cols-6 ">
            <x-label class="col-span-2">Behance</x-label>
            <x-input class="w-full col-span-4 rounded-md border-gray-300" name="behance"></x-input>
        </div>
        <div class="mt-4 flex justify-end space-x-2">
            <x-button x-on:click="CreatePersonal">Update </x-danger-button>
            <x-danger-button x-on:click="DeletePersonal">Cancel</x-danger-button>
        </div>
    </div>
</div>
