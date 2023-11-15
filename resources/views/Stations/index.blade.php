<x-app2-layout>
  <h1 class="mb-10 text-3xl">Lista stacji</h1>
  <p class="mb-3 text-2xl font-normal">Wybierz stację, żeby zobaczyć szczegóły</p>
  <div class="card">
    <div class="overflow-x-auto grid-stations">
      <div class="font-semibold">Lp.</div>
      <div class="font-semibold">Nazwa stacji</div>
      <div class="font-semibold">Nazwa skrócona</div>
      <div class="font-semibold">Liczba zwrotnic</div>
      <div class="font-semibold">ID</div>
      @foreach($stations as $station)
      <div>{{$loop->iteration}}</div>
      <div>
        <a href="{{route('stations.show', $station->id)}}" class="hover:text-sky-600">
          {{$station->name}}
        </a>
      </div>
      <div>{{$station->shortName}}</div>
      <div>{{$station->maxNumberOfRailwaySwitches}}</div>
      <div>{{$station->id}}</div>
      @endforeach
    </div>
  </div>
</x-app2-layout>
