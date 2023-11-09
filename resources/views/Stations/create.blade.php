<x-app2-layout>
  <x-menu />
  <form action="{{route('stations.store')}}" method="post">
    <h2 class="ml-2 font-bold my-2 underline underline-offset-4 text-slate-700">Zapisz nową stację</h2>
    @csrf
    <div class="max-w-md border p-4 shadow-md">
      <div class="mb-4">
        <x-label value="Nazwa stacji" />
        <x-input type="text" name="name" id="name" required />
      </div>
      <div class="mb-4">
        <x-label value="Skrócona nazwa" />
        <x-input type="text" name="shortName" id="shortName" required />
      </div>
      <div class="mb-4">
        <x-label value="Liczba zwrotnic" />
        <select id="maxNumberOfCrossovers" name="maxNumberOfCrossovers"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          @for($i=1; $i <= 30; $i++) <option value="{{$i}}">{{$i}}</option>
            @endfor
        </select>
      </div>
      <div class="mt-2">
        <x-button class="mt-3">
          Zapisz
        </x-button>
      </div>
    </div>
  </form>
</x-app2-layout>
