@extends('layouts.admin')

@section('content')
    {{-- <div class="content">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
                @foreach ($products as $product)
                    <div class="col">
                        <div class="card">
                            <div class="card-header">{{ $product->name }}</div>
                            <div class="card-body">{{ $product->description }}</div>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
 --}}

    <div class="container-fluid mt-4">
        <h2>Benvenuto nel tuo ristorante</h2>
    </div>
@endsection
