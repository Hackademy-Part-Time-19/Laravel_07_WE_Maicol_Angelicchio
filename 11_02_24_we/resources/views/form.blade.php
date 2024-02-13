<x-main>
    <h1>Inserisci articolo</h1>
    <form action="{{ route('form')}}" method="POST" class="mt-5 mx-auto col-lg-6">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo:</label>
            <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo" name="title" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoria:</label>
            <input type="text" class="form-control" id="category" placeholder="Inserisci la categoria" name="category" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione:</label>
            <input type="text" class="form-control" id="description" placeholder="Inserisci la descrizione" name="description" required>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body:</label>
            <input type="text" class="form-control" id="body" placeholder="Inserisci il body" name="body">
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</x-main>