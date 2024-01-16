<x-layout>
<div
    class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            CREATE NEW COMPANY
        </h2>
        <p class="mb-4">Add new company to the list</p>
    </header>

    <form method="POST" action="/companies/store" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label
                for="name"
                class="inline-block text-lg mb-2"
            >Company Name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name"
                placeholder="Example: Acme Corp."
                value="{{old('name')}}"
            />

            @error('name')
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
                value="{{old('email')}}"
            />

            @error('email')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="website"
                class="inline-block text-lg mb-2"
            >
                Website URL
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="website"
                placeholder="Example: www.test.test"
                value="{{old('website')}}"
            />

            @error('website')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
                Company Logo
            </label>
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="logo"
            />

            @error('logo')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-green-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow
        hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 mt-4" type="submit">
                Create Company
            </button>

            <a href="/companies" class="text-black ml-4"> Back </a>
        </div>
    </form>
</div>
</x-layout>
