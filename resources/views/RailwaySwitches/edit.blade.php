<x-app2-layout>
    <h1 class="mb-10 text-3xl">Edycja zwrotnic</h1>
    <p class="mb-3 text-2xl font-normal">Stacja {{$station->name}}</p>

    <div class="card">
        <form action="{{route('stations.railway-switches.update', $station->id)}}" method="post">
            @csrf
            @method('put')

            <div class="max-w-full mt-4">

                <div class="grid grid-cols-9 font-semibold border-b divide-x ">
                    <div class="text-center ">Lp.</div>
                    <div class="col-span-6 px-8">Nazwa</div>
                    <div class="col-span-2 px-4 text-center">Kontrola</div>

                </div>

                @foreach($switches as $key => $switch)
                <div class="grid grid-cols-9 border-0 border-b divide-x hover:bg-gray-100 hover:cursor-pointer ">
                    <div class="flex items-center justify-center font-semibold">{{$loop->iteration}}.</div>
                    <div class="col-span-6">
                        <input type="text" name="switch[{{$key}}][name]" id="name-{{$key}}" class="w-full py-1 border-0 focus:ring-0 hover:cursor-pointer bg-inherit placeholder:text-sm" value="{{$switch->name ? $switch->name : ''}}" placeholder="Wprowadź nazwę" autocomplete="off">

                    </div>
                    <div class="flex items-center justify-center col-span-2 px-4 text-center ">
                        <input type="checkbox" name="switch[{{$key}}][control]" class="w-4 h-4" value="1" {{$switch->control ? 'checked="checked"' : '' }}>
                    </div>

                </div>
                @endforeach
            </div>
            <div>
                <x-button type=" submit" class="mt-12 mb-6">
                    Zapisz zmiany
                </x-button>
            </div>
        </form>
    </div>

</x-app2-layout>
