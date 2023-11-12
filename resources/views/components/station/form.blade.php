<div class="card">
    <div class="mb-4 sm:w-1/3">
        <x-label value="Nazwa stacji" />
        <x-input type="text" name="name" id="name" required value="{{$station->name}}" />
    </div>
    <div class="mb-4 sm:w-1/3">
        <x-label value="Skrócona nazwa" />
        <x-input type="text" name="shortName" id="shortName" required value="{{$station->shortName}}" />
    </div>
    <div class="mb-4 sm:w-1/3">
        <x-label value="Liczba zwrotnic" />
        <select id="maxNumberOfRailwaySwitches" name="maxNumberOfRailwaySwitches" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500">
            @for($i=10; $i <= 50; $i +=10) @if($i==$station->maxNumberOfRailwaySwitches)
                <option selected value="{{$i}}">{{$i}}</option>
                @else
                <option value="{{$i}}">{{$i}}</option>
                @endif
                @endfor
        </select>
    </div>
    <div class="mt-2">
        <x-button class="mt-3">
            Zapisz
        </x-button>
    </div>
</div>
