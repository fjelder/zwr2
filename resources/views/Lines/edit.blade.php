<x-app2-layout>
    <form action="{{route('lines.update', $line->id)}}" method="post">
        <h1 class="mb-10 text-3xl">Edytuj dane linii</h1>
        <p class="mb-3 text-2xl font-normal">Zmień zapisane informację dotyczące linii kolejowej.</p>
        @csrf
        @method('put')
        <x-line.form :line=$line />
    </form>
</x-app2-layout>