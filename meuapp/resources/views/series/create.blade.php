<x-layout title="Séries">
    <h1>Adicionar Nova Série</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('series.store') }}" method="POST">
        @csrf  

        <div class="form-group">
            <label for="nome">Nome da Série:</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" rows="4"></textarea>
        </div>

        <button type="submit">Registrar Série</button>
    </form>
</x-layout>