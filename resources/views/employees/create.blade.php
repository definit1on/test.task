<x-layout>
    <div
        class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
    >
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                CREATE NEW EMPLOYEE
            </h2>
            <p class="mb-4">Add new employee to the list</p>
        </header>

        <form method="POST" action="/employees/store" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label
                    for="first_name"
                    class="inline-block text-lg mb-2"
                >First Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="first_name"
                    placeholder="Example: Albert"
                />

                @error('first_name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="last_name"
                    class="inline-block text-lg mb-2"
                >Last Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="last_name"
                    placeholder="Example: Johnson"
                />

                @error('last_name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2"
                >Contact Email</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="email"
                    placeholder="Example: test@test.com"
                />

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="phone"
                    class="inline-block text-lg mb-2"
                >
                    Telephone Number
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="phone"
                    placeholder="Example: 099-123-4567"
                />

                @error('phone')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="company_id" class="inline-block text-lg mb-2"
                >Company</label
                >
                <input
                    type="number"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="company_id"
                    id="company_id"
                    required
                />

                @error('company_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-green-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow
                hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 mt-4" type="submit">
                    Create Employee
                </button>

                <a href="/employees" class="text-black ml-4"> Back </a>
            </div>
        </form>
</x-layout>
