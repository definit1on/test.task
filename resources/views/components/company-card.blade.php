@props(['company'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$company->logo ? asset('storage/' . $company->logo) : asset('/images/no-image.png')}}"
            alt=""
        />
        <div>
            <div class="text-xl font-bold mb-4">{{$company->name}}</div>
            <div class="text-lg mt-4">
                Website: <a href="https://{{$company->website}}">{{$company->website}}</a>
            </div>
            <div class="mt-2">
                Email: <a href="mailto://{{$company->email}}">{{$company->email}}</a>
            </div>

            <form method="POST" action="/companies/{{$company->id}}">
                <a href="/companies/{{$company->id}}/edit"><button class="bg-blue-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 mt-4" type="button">
                        Edit
                    </button>
                </a>


                @csrf
                @method('DELETE')
                <button class="bg-red-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow
                hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 mt-4">
                    Delete
                </button>
            </form>
        </div>
    </div>
</x-card>
