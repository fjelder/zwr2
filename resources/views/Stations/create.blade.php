<x-app2-layout>
    <form action="{{route('stations.store')}}" method="post">
        <h1 class="mb-10 text-3xl">Utwórz nową stacje</h1>
        <p class="mb-3 text-2xl font-normal">Uzupełnij formularz, aby zapisać nową stację.</p>
        @csrf
        <x-station.form :station=$station />
    </form>
</x-app2-layout>
