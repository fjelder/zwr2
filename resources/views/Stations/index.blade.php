<x-app2-layout>
  <x-menu />
  <table class="mf-table">
    <thead>
      <tr>
        <th class="w-10">Lp.</th>
        <th class="w-10">ID</th>
        <th class="w-56 text-left">Nazwa stacji</th>
        <th class="w-40 text-left">Skrócona nazwa</th>
        <th class="w-40 text-left">Liczba zwrotnic</th>
        <th class="w-40 text-left"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($stations as $station)
      <tr>
        <td class="w-10 text-center">{{$loop->iteration}}</td>
        <td class="w-10 text-center">{{$station->id}}</td>
        <td>{{$station->name}}</td>
        <td>{{$station->shortName}}</td>
        <td>{{$station->maxNumberOfCrossovers}}</td>
        <td><a href="{{route('stations.show', $station->id)}}">Więcej</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</x-app2-layout>
