@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-5">
                <div class="card border-green">
                    <div class="card-header bg-green text-white fw-bold fs-4 text-center">{{ __('Benvenuto nella tua area riservata!') }}</div>

                    <div class="card-body text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (empty($restaurant))
                            <h4>Nessun ristorante presente.</h4>
                            <a href="{{ route('admin.restaurants.create') }}" class="btn addBtn text-white bg-green fw-bold mt-2">Aggiungi il tuo ristorante</a>
                        @else
                            <h4>Ristorante già creato!</h4>
                            <a class="btn addBtn text-white bg-green fw-bold mt-2" href="{{ route('admin.products.create') }}">Aggiungi un piatto al menù</a>
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
