@extends('layouts.admin')
@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <h2>Modifica Prodotto</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">
            <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nome*</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name') ?? $product->name }}" required minlength="4"
                        placeholder="Inserisci nome piatto">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Immagine Prodotto</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                        name="image" placeholder="Scegli un'immagine" value="{{ old('image') }}">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="ingredients" class="form-label">Ingredienti*</label>
                    <input type="text" class="form-control @error('ingredients') is-invalid @enderror" id="ingredients"
                        name="ingredients" value="{{ old('ingredients') ?? $product->ingredients }}" required minlength="4"
                        placeholder="Inserisci lista ingredienti">
                    @error('ingredients')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione*</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description" value="{{ old('description') ?? $product->description }}" required minlength="4"
                        placeholder="Inserisci una descrizione">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo*</label>
                    <input type="number" min="0" step=".01"
                        class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                        value="{{ old('price') ?? $product->price }}" placeholder="XXXX.XX" required>
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <p>Visibile*</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="visible">
                            Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="visible">
                            No
                        </label>
                    </div>
                </div>
                <p class="text-body-tertiary"><i>*Campo obbligatorio</i></p>
                <button type="submit" class="btn btn-primary">Salva Modifiche</button>
            </form>
        </div>
    </div>
@endsection
