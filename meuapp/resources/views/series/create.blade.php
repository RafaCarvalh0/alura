<x-layout title="Séries">
    <form action="/series/store" method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome da Série</label>
            <input type="text" class="form-control" id="nome" name="nome" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>