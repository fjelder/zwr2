<div class="card">
  <div class="mb-4 sm:w-1/3">
    <x-label value="Numer linii" />
    <x-input type="text" name="number" id="name" required value="{{$line->number}}" />
  </div>
  <div class="mb-4 sm:w-1/3">
    <x-label value="Stacja początkowa" />
    <x-input type="text" name="stationA" id="stationA" required value="{{$line->stationA}}" />
  </div>
  <div class="mb-4 sm:w-1/3">
    <x-label value="Stacja końcowa" />
    <x-input type="text" name="stationB" id="stationB" required value="{{$line->stationB}}" />
  </div>

  <div class="mt-2">
    <x-button class="mt-3">
      Zapisz
    </x-button>
  </div>
</div>