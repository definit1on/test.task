<x-layout>
    @auth
    <div class="uppercase font-bold text-4xl" style="text-align: center">
        <h1>Welcome</h1>
    </div>
    @else
    <div class="uppercase font-bold text-5xl" style="text-align: center">
        <h1>Login to Manage Admin Panel</h1>
    </div>
    @endauth
</x-layout>
