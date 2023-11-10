<x-app2-layout>
  <x-menu />
  <div>
    <p>{{$station->id}}</p>
    <p>{{$station->name}}</p>
    <p>{{$station->shortName}}</p>
    <p>{{$station->maxNumberOfRailwaySwitches}}</p>
    <p>{{$station->created_at}}</p>
    <p>{{$station->updated_at}}</p>
    <a href="{{route('stations.railway-switches.index', $station->id)}}" class="link">Zwrotnice</a>
  </div>
</x-app2-layout>
