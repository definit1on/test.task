@props(['employee'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{asset('images/guest.png')}}"
            alt=""
        />
        <div>
            <div class="text-xl font-bold mb-4">{{$employee->first_name}} {{$employee->last_name}}</div>
            <div class="text-lg mt-4">
                Telephone number:<a href="tel:{{$employee->phone}}"> {{$employee->phone}}</a>
            </div>
            <div class="text-lg">
                Email:<a href="mailto:{{$employee->email}}"> {{$employee->email}}</a>
            </div>
            <div class="text-lg">
                Company: {{$employee->company->name}}
            </div>


            <form method="POST" action="/employees/{{$employee->id}}">
                <a href="/employees/{{$employee->id}}/edit"><button class="bg-blue-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 mt-4" type="button">
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
