<x-app2-layout>
    <x-table.main :data=$lines :config="[
            'lp' => 'true',
            'button' => [
                'text' => 'Nowa linia',
                'route' => 'lines.create'
            ]
        ]">
        <x-slot name="search">
            <x-table.search />
        </x-slot>

        <x-slot name="tableHead">
            <tr>
                <x-table.th value="Lp." />
                <x-table.th value="Numer linii" />
                <x-table.th value="Stacja początkowa" />
                <x-table.th value="Stacja końcowa" />
                <x-table.th value="">
                    <span class="sr-only">Actions</span>
                </x-table.th>
            </tr>
        </x-slot>

        <x-slot name="tableBody">

            @foreach($lines as $d)
            <x-table.tr>
                <x-table.td class="font-semibold text-red-500" value="{{ $lines->firstItem()+$loop->index }}." />
                <x-table.td value="{{ $d->number }}" />
                <x-table.td value="{{ $d->stationA }}" />
                <x-table.td value="{{ $d->stationB }}" />

                <x-table.td-action :id="$d->id" />


            </x-table.tr>
            @endforeach

        </x-slot>

        <x-slot name="links">
            <x-table.links :data=$lines />
        </x-slot>

    </x-table.main>

</x-app2-layout>
