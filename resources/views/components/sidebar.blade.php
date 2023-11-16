<div class="sidebar">
    <nav class="flex flex-col gap-6">

        <div>
            <span class="text-sm font-bold text-gray-700 dark:text-gray-400">Stacje kolejowe</span>
            <div class="mt-2">
                <x-sidebar-nav-link href="{{route('stations.index')}}" :active="is_active('stations.index')">
                    Lista stacji
                </x-sidebar-nav-link>
                <x-sidebar-nav-link href="{{route('stations.create')}}" :active="is_active('stations.create')">
                    Nowa stacja
                </x-sidebar-nav-link>

            </div>
        </div>

        <div>
            <span class="text-sm font-bold text-gray-700 dark:text-gray-400">Linie kolejowe</span>
            <div class="mt-2">
                <x-sidebar-nav-link href="{{route('lines.index')}}" :active="is_active('lines.index')">
                    Lista linii
                </x-sidebar-nav-link>
                <x-sidebar-nav-link href="{{route('lines.create')}}" :active="is_active('lines.create')">
                    Nowa linia
                </x-sidebar-nav-link>
            </div>
        </div>
    </nav>
</div>
