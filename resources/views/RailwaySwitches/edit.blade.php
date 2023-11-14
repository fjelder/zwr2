<x-app2-layout>
  <h1 class="mb-10 text-3xl">Edycja zwrotnic</h1>
  <p class="mb-3 text-2xl font-normal">Stacja {{$station->name}}</p>
  <div class="flex flex-col">

    <form action="{{route('stations.railway-switches.update', $station->id)}}" method="post">
      @csrf

      <div class="card">

        <div class="grid divide-x overflow-x-scroll border text-sm"
          style="grid-template-columns: repeat({{$station->maxNumberOfRailwaySwitches+1}},minmax(75px,1fr));">
          <div class="text-center font-semibold">
            <div class="border-b">Lp.</div>
            <div class="border-b">Nazwa</div>
            <div>Kontrola</div>
          </div>
          @foreach($switches as $key => $switch)
          <div class="row-span-4x ">
            <div class="text-center border-b font-semibold">{{$loop->iteration}}</div>
            <div class="text-center border-b">
              <input type="text" name="" id="" class="w-[75px] border-0 p-1 bg-sky-50 text-center"
                value="{{$switch->name ? $switch->name : ' '}}">
            </div>
            <div class="text-center p-2">
              <input type="checkbox" value="" class="" {{$switch->control ? 'checked="checked"' : '' }}>
            </div>
          </div>
          @endforeach
        </div>


      </div>

      <div class="card">
        <div class="relative overflow-x-auto">
          <table class="max-w-md border text-left rtl:text-right text-gray-500 dark:text-gray-400 text-xs">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th scope="col" class="px-6 py-3">
                  Lp.
                </th>
                <th scope="col" class="px-6 py-3">
                  Nazwa
                </th>
                <th scope="col" class="px-6 py-3">
                  Kontrola
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach($switches as $key => $switch)
              <tr
                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{$loop->iteration}}
                </td>
                <td class=" px-6 py-4">
                  <x-input type="text" value="{{$switch->name}}" name="switch[{{$key}}][name]" />
                </td>
                <td class="px-6 py-4">
                  <label class="relative inline-flex items-center me-5 cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer"
                      {{$switch->control ? 'checked="checked"' : '' }}>
                    <div
                      class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-sky-300 dark:peer-focus:ring-sky-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-sky-600">
                    </div>
                  </label>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      @method('put')
      <div class="grid grid-cols-5 gap-x-2 gap-y-12 mt-24">
        @foreach($switches as $key => $switch)
        <div class="text-sm card">
          <h2
            class="inline-block w-12 h-12 pt-2 mb-8 text-xl font-semibold text-center bg-gray-200 border text-sky-600 border-sky-100">
            {{$loop->iteration}}</h2>
          <div class="mb-4">
            <x-label value="Nazwa" />
            <x-input type="text" value="{{$switch->name}}" name="switch[{{$key}}][name]" />
          </div>
          <div class="mb-4 ">
            <x-label value="Kontrola" />
            <div class="flex items-center mb-2">
              <input id="control-radio-{{$key}}" type="radio" value="1" {{$switch->control ? 'checked="checked"' : '' }}
                name="switch[{{$key}}][control]"" class=" w-4 h-4 bg-gray-100 border-gray-300 text-sky-600
                focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                dark:border-gray-600">
              <label for="default-radio-1" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Tak</label>
            </div>
            <div class="flex items-center mb-2">
              <input id="control-radio-{{$key}}" type="radio" value="0" @isset($switch->id)
              {{ $switch->control ? '' : 'checked="checked"' }} @endif name="switch[{{$key}}][control]""
              class="w-4 h-4 bg-gray-100 border-gray-300 text-sky-600 focus:ring-sky-500 dark:focus:ring-sky-600
              dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="default-radio-1" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Nie</label>
            </div>
          </div>
        </div>

        @endforeach


      </div>
      <x-button type="submit" class="my-12">
        Zapisz zmiany
      </x-button>
    </form>
  </div>

</x-app2-layout>
