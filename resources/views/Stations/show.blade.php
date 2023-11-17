<x-app2-layout>
    <h1 class="mb-10 text-3xl">Stacja {{$station->name}}</h1>
    <p class="mb-3 text-2xl font-normal">Dane szczegółowe</p>


    <div class="card">
        <div class="flex">
            <p class="border-r w-96">Indywidualny numer stacji w bazie danych:</p>
            <p class="ml-4 font-semibold">{{$station->id}}</p>
        </div>
        <div class="flex">
            <p class="border-r w-96">Pełna nazwa stacji:</p>
            <p class="ml-4 font-semibold">{{$station->name}}</p>
        </div>
        <div class="flex">
            <p class="border-r w-96">Skrócona nazwa stacji:</p>
            <p class="ml-4 font-semibold">{{$station->shortName}}</p>
        </div>
        <div class="flex">
            <p class="border-r w-96">Linia kolejowa</p>
            <p class="ml-4 font-semibold">x</p>
        </div>
        <div class="flex">
            <p class="border-r w-96">Maksymalna zdefiniowana liczba zwrotnic:</p>
            <p class="ml-4 font-semibold">{{$station->maxNumberOfRailwaySwitches}}</p>
        </div>
        <div class="flex mt-6 text-sm text-gray-500">
            <p>Utworzono: {{$station->created_at->format('d.m.Y')}}r.</p>
            <p class="ml-4">Zaktualizowano: {{$station->updated_at->format('d.m.Y')}}r.</p>
        </div>
    </div>

    <div class="tool-card">
        <a href="{{route('stations.edit', $station->id)}}" class="text-gray-600 hover:text-sky-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
        </a>
        <a href="{{route('stations.destroy', $station->id)}}" class="ml-4 text-red-600 hover:text-sky-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
            </svg>
        </a>
    </div>


    <p class="mb-3 text-2xl font-normal">Lista zdefiniowanych zwrotnic</p>
    <div class="flex w-full overflow-x-auto card ">
        <div class="flex flex-col items-center justify-center border">
            <div class="w-full p-2 font-semibold text-center border-b bg-gray-50">Lp</div>
            <div class="w-full h-full p-2 text-center"></div>
        </div>
        @foreach($switches as $switch)
        <div class="flex flex-col items-center justify-center border-r">
            <div class="w-full p-2 font-semibold text-center border-t border-b bg-gray-50">{{$loop->iteration}}</div>
            <div class="w-full p-2 text-center border-b">{{$switch->name}}</div>
            <div class="w-full p-2 text-xs text-center border-b">{{getControl($switch->control)}}</div>
            <div class="w-full h-full p-2 text-xs text-center border-b">{{getTypeOfSwitch($switch->type)}}</div>
        </div>
        @endforeach
    </div>
    <div class="tool-card">
        <a href="{{route('stations.railway-switches.edit', $station->id)}}" class="text-gray-600 hover:text-sky-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
        </a>
    </div>

</x-app2-layout>