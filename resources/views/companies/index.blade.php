<x-layout>

    <a href="/companies/create">
        <button class="ml-5 mb-5 bg-green-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow
        hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 mt-4" type="button">
            Create
        </button>
    </a>

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($companies) == 0)

            @foreach($companies as $company)
                <x-company-card :company="$company" />
            @endforeach
    </div>
    @else
    <div class="uppercase font-bold text-5xl text-left">
        <h1>No companies found</h1>
    </div>
    @endunless



    <div class="mt-6 p-4">
        {{$companies->links()}}
    </div>
</x-layout>
