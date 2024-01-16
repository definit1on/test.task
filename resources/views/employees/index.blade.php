<x-layout>

    @include('partials._search')

    <a href="/employees/create">
        <button class="ml-5 mb-5 bg-green-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow
        hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 mt-4" type="button">
            Create
        </button>
    </a>

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($employees) == 0)

            @foreach($employees as $employee)
                <x-employee-card :employee="$employee"/>
            @endforeach

        @else
            <p>No employees found</p>
        @endunless

    </div>

    <div class="mt-6 p-4">
        {{$employees->links()}}
    </div>

</x-layout>
