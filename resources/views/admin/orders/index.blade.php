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

    {{-- <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($orders as $order)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">{{ $order->name }}</div>
                        <div class="card-header">{{ $order->surname }}</div>
                        <div class="card-body">{{ $order->email }}</div>
                        <div class="card-body">{{ $order->address }}</div>
                        <div class="card-body">{{ $order->notes }}</div>
                        <div class="card-body">{{ $order->paid }}</div>
                        <div class="card-body">{{ $order->total }}</div>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('admin.products.show', $order->id) }}"
                                class="btn btn-primary mx-2 mb-2">Info</a>
                            <a href="{{ route('admin.products.edit', $order->id) }}"
                                class="btn btn-info mx-2 mb-2">Modifica</a>
                            <form>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Elimina
                                </button>
                            </form>
                        </div>

                    </div>
            @endforeach
        </div>

    </div>
    </div> --}}



    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($orders as $order)
                <div class="col-md-4">
                    <div class="card m-2">
                        <div class="card-header bg-secondary text-white">Ordine numero: {{ $order->id }}</div>
                        <div class="card-body">Nome cliente: {{ $order->name }} {{ $order->surname }}</div>
                        <div class="card-body">Email: {{ $order->email }}</div>
                        <div class="card-body">Indirizzo: {{ $order->address }}</div>
                        <div class="card-body">Note del cliente: {{ $order->notes }}</div>
                        <div class="card-body">Stato pagamento: {{ $order->paid == 1 ? 'Pagato' : 'Non pagato' }}</div>
                        <div class="card-body">Totale: {{ $order->total }}</div>
                        {{-- <div class="d-flex justify-content-center">
                            <form>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Elimina
                                </button>
                            </form>
                        </div> --}}

                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @if ($orders->count() == 0)
        <h4>Attualmente non ci sono ordini</h4>
    @endif
@endsection
