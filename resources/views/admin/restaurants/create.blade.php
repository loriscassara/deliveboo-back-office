@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <h2>Nuovo Ristorante</h2>
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
            <form action="{{ route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="business_name" class="form-label">Nome*</label>
                    <input type="text" class="form-control @error('business_name') is-invalid @enderror"
                        id="business_name" name="business_name" value="{{ old('business_name') }}" required minlength="5">
                    @error('business_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="cover_image" class="form-label">Immagine Ristorante</label>
                    <input type="file" class="form-control @error('cover_image') is-invalid @enderror" id="cover_image"
                        name="cover_image" placeholder="choose an image" value="{{ old('cover_image') }}">
                    @error('cover_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Indirizzo*</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                        name="address" value="{{ old('address') }}"required minlength="5">
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="P_IVA" class="form-label">P.IVA*</label>
                    {{-- <input type="text" class="form-control @error('P_IVA') is-invalid @enderror" id="P_IVA"
                        name="P_IVA" value="{{ old('P_IVA') }}"> --}}
                    <input type="text" required pattern="[0-9]{11}" inputmode="numeric" minlength="11" maxlength="11"
                        class="form-control @error('P_IVA') is-invalid @enderror" id="P_IVA" name="P_IVA" />
                    @error('P_IVA')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Numero di telefono*</label>
                    {{-- <input type="text" class="form-control @error('P_IVA') is-invalid @enderror" id="P_IVA"
                        name="P_IVA" value="{{ old('P_IVA') }}"> --}}
                    <input type="text" required pattern="[0-9]{13}" inputmode="numeric"
                        class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" required
                        minlength="9" maxlength="13" />
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="types" class="form-label d-block">Tipo di cucina**</label>
                    @foreach ($types as $type)
                        <input class="form-check-input" type="checkbox" value="{{ $type->id }}" name="types[]"
                            id="flexCheckDefault" required>{{ $type->name }}
                        {{-- <option value="{{ $type->id }}">{{ $type->name }}</option>  --}}
                    @endforeach
                    {{-- <select multiple name="types[]" id="" class="form-select">

                    </select> --}}
                </div>
                <p class="text-body-tertiary"><i>*Campo obbligatorio.</i></p>
                <p class="text-body-tertiary"><i>**Richieste almeno due tipi di cucina.</i></p>
                <button type="submit" class="btn btn-primary">Inserisci</button>
            </form>
        </div>
    </div>
@endsection
