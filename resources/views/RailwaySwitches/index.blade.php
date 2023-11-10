<x-app2-layout>
  <x-menu />

  <div class="bg-red-200 my-2 p-1">
    <p>Zwrotnice na stacji: <strong>{{$station->name}}</strong></p>
    <p>Maksymalna ilość zwrotnic: <strong>{{$station->maxNumberOfRailwaySwitches}}</strong></p>
  </div>
  <table class="mf-table">
    <thead>
      <tr>
        <th class="w-10">Lp.</th>
        <th class="w-40 text-left">Nazwa</th>
        <th class="w-40 text-left">Rodzaj</th>
        <th class="w-40 text-left">Kontrola</th>
        <th class="w-40 text-left"></th>
      </tr>
    </thead>
    <tbody>

      @foreach($railwaySwitches as $key => $switch)
      <tr>
        <td class="w-10 text-center bg-red-100 font-semibold">{{$switch->position}}</td>
        <td>{{$switch->name}}</td>
        <td>{{getTypeOfSwicth($switch->type)}}</td>
        <td>{{getControl($switch->control)}}</td>
        <td><a href="">{{$key+1}}</a></td>
      </tr>
      @endforeach


    </tbody>
  </table>

</x-app2-layout>
