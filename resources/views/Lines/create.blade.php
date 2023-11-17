<x-app2-layout>
    <form action="{{route('lines.store')}}" method="post">
        <h1 class="mb-10 text-3xl">Nowa linia kolejowa</h1>
        <p class="mb-3 text-2xl font-normal">Uzupełnij formularz, aby zapisać nową linię kolejową.</p>
        @csrf
        <x-line.form :line="new App\Models\Line" />
    </form>
</x-app2-layout>