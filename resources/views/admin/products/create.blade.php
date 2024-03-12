@extends('layouts.admin')

@section('content')

    <div class="container-fluid mt-4"> 
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-green">
                    <div class="card-header bg-green text-white fw-bold fs-4">Nuovo Prodotto</div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-sm-2 mb-md-4 row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nome*</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                        name="name" required minlength="4" placeholder="Inserisci nome piatto">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
            
                            <div class="mb-sm-2 mb-md-4 row">                       
                                <label for="image" class="col-md-4 col-form-label text-md-right">Immagine Prodotto</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                                        name="image" placeholder="Scegli un'immagine">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror                                
                                </div>
                            </div>
            
                            <div class="mb-sm-2 mb-md-4 row">
                                <label for="ingredients" class="col-md-4 col-form-label text-md-right">Ingredienti*</label>
                                <div class="col-md-6">
                                    <textarea type="text" class="form-control @error('ingredients') is-invalid @enderror" id="ingredients"
                                        name="ingredients" required minlength="4" placeholder="Inserisci lista ingredienti"></textarea>
                                    @error('ingredients')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
            
                            <div class="mb-sm-2 mb-md-4 row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Descrizione*</label>
                                <div class="col-md-6">
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                        rows="5" cols="10" placeholder="Inserisci una descrizione"></textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
            
                            <div class="mb-sm-2 mb-md-4 row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">Prezzo*</label>
                                <div class="col-md-6">
                                    <input type="number" min="0" step=".01"
                                        class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                                        placeholder="XXXX.XX" required>
                                    @error('price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
            
            
                            <div class="mb-sm-2 mb-md-4 row">
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
            
                            <button type="submit" class="btn addBtn text-white bg-green fw-bold">Inserisci</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
            



