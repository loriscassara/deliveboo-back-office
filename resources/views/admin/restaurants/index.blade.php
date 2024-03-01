@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Benvenuto nella tua area riservata!') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(empty($restaurant))
                        <h3>Da qui puoi aggiungere il tuo ristorante</h3>
                        <a href="{{ route('admin.restaurants.create') }}" class="btn btn-warning">Aggiungi il tuo
                            ristorante</a>
                        @else
                        <p>Ristorante già creato</p>
                         @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
