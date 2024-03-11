@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-green">
                    <div class="card-header bg-green text-white fw-bold fs-4">Nuovo Ristorante</div>
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
                        <form id="restaurant_form" action="{{ route('admin.restaurants.store') }}" method="POST"
                            enctype="multipart/form-data" onsubmit="return validateForm()">
                            @csrf

                            <div class="row mb-4">
                                <label for="business_name" class="col-md-4 col-form-label text-md-right">Nome*</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('business_name') is-invalid @enderror"
                                        id="business_name" name="business_name" required minlength="5">
                                    @error('business_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="cover_image" class="col-md-4 col-form-label text-md-right">Immagine
                                    Ristorante</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control @error('cover_image') is-invalid @enderror"
                                        id="cover_image" name="cover_image" placeholder="choose an image">
                                    @error('cover_image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Descrizione*</label>
                                <div class="col-md-6">
                                    <textarea type="text" class="form-control @error('ingredients') is-invalid @enderror" id="description"
                                        name="description" required minlength="10" placeholder="Aggiungi una descrizione"></textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Indirizzo*</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                                        id="address" name="address" required minlength="5">
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="P_IVA" class="col-md-4 col-form-label text-md-right">P.IVA*</label>
                                <div class="col-md-6">
                                    <input type="number" inputmode="numeric" minlength="11" maxlength="11"
                                        class="form-control @error('P_IVA') is-invalid @enderror" id="P_IVA"
                                        name="P_IVA" />
                                    @error('P_IVA')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Numero di
                                    telefono*</label>
                                <div class="col-md-6">
                                    <input type="number" required inputmode="numeric"
                                        class="form-control @error('phone') is-invalid @enderror" id="phone"
                                        name="phone" minlength="9" maxlength="13" />
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="types" class="form-label d-block">Tipo di cucina**</label>
                                <div id="error_message" class="text-danger"></div>
                                <div class="col-md-6">
                                    @foreach ($types as $type)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="cuisineCheck" name="types[]"
                                                id="{{ $type->id }}" value="{{ $type->id }}">
                                            <label class="form-check-label"
                                                for="{{ $type->id }}">{{ $type->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <p class="text-body-tertiary"><i>*Campo obbligatorio.</i></p>
                            <p class="text-body-tertiary"><i>**Richiesto almeno un tipo di cucina.</i></p>
                            <button type="submit" class="btn addBtn text-white bg-green fw-bold">Inserisci</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



<script>
    function validateForm() {
        let checkboxes = document.querySelectorAll('input[name = "types[]"]');
        let checkedCount = 0;
        // Controlla il numero di checkbox selezionati
        for (let i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                checkedCount++;
            }
        }
        // Se il numero di checkbox selezionati è inferiore a 1, mostra un messaggio di errore nella pagina e restituisci false
        if (checkedCount < 1) {
            let errorMessage = document.getElementById('error_message');
            errorMessage.textContent = "Seleziona almeno un tipo di cucina.";
            return false;
        }
        // Se almeno una checkbox è stata selezionata, restituisci true per consentire l’invio del modulo
        return true;
    }
</script>
