@props(['employee'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-36 mr-6 md:block"
            src="{{asset('images/guest.png')}}"
            alt=""
        />
        <div>
            <div class="text-xl font-bold mb-4">{{$employee->first_name}} {{$employee->last_name}}</div>
            <div class="text-lg mt-4">
                <a href="tel:{{$employee->phone}}">{{$employee->phone}}</a>
            </div>
            <div class="text-lg">
                <a href="mailto:{{$employee->email}}">{{$employee->email}}</a>
            </div>

            <a href="/employees/{{$employee->id}}/edit"><button class="bg-blue-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 mt-4" type="button">
                    Edit
                </button>
            </a>

            <form action="/employees/{{$employee->id}}">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 mt-4" type="button">
                    Delete
                </button>
            </form>
        </div>
    </div>
</x-card>
