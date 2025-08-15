<x-layout title="Séries">
    <a href="/series/create" class="btn btn-primary">Adicionar Série</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie->titulo }}</li>
        @endforeach
    </ul>

    <script>
        const series = {{ Js::from($series) }};
    </script>
</x-layout>