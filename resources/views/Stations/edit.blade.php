<x-app2-layout>
    <form action="{{route('stations.store')}}" method="post">
        <h1 class="mb-10 text-3xl">Edytuj dane stacji</h1>
        <p class="mb-3 text-2xl font-normal">Zmień zapisane informację dotyczące stacji.</p>
        @csrf
        <x-station.form :station=$station />
    </form>
</x-app2-layout>
