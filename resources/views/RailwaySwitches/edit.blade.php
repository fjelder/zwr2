<x-app2-layout>
    <h1 class="mb-10 text-3xl">Edycja zwrotnic</h1>
    <p class="mb-3 text-2xl font-normal">Stacja {{$station->name}}</p>
    <div class="flex flex-col">



        @foreach($switches as $switch)
        <div class="flex border-b">
            <div>{{$loop->iteration}}.</div>
            <p class="mx-3">{{$switch->name}}</p>
            <p>{{$switch->position}}</p>
        </div>
        @endforeach








    </div>

</x-app2-layout>
