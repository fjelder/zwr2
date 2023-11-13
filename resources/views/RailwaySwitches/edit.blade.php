<x-app2-layout>
  <h1 class="mb-10 text-3xl">Edycja zwrotnic</h1>
  <p class="mb-3 text-2xl font-normal">Stacja {{$station->name}}</p>
  <div class="flex flex-col">

    <form action="{{route('stations.railway-switches.update', $station->id)}}" method="post">
      @csrf
      @method('put')
      <div class="grid grid-cols-5 gap-x-2 gap-y-12">
        @foreach($switches as $key => $switch)
        <div class="card text-sm">
          <h2
            class="inline-block w-12 h-12 pt-2 mb-8 text-xl font-semibold text-center bg-gray-200 border text-sky-600 border-sky-100">
            {{$loop->iteration}}</h2>
          <div class="mb-4">
            <x-label value="Nazwa" />
            <x-input type="text" value="{{$switch->name}}" name="switch[{{$key}}][name]" />
          </div>
          <div class=" mb-4">
            <x-label value="Kontrola" />
            <div class="flex items-center mb-2">
              <input id="control-radio-{{$key}}" type="radio" value="true"
                {{$switch->control ? 'checked="checked"' : '' }} name="switch[{{$key}}][control]"" class=" w-4 h-4
                bg-gray-100 border-gray-300 text-sky-600 focus:ring-sky-500 dark:focus:ring-sky-600
                dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="default-radio-1" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Tak</label>
            </div>
            <div class="flex items-center mb-2">
              <input id="control-radio-{{$key}}" type="radio" value="false" @isset($switch->id)
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
