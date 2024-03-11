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
        <div class="row justify-content-center">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">{{ $product->name }}</div>
                        <div class="card-body">{{ $product->description }}</div>
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                                alt="{{ $product->name }}">
                        @endif
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('admin.products.edit', $product->id) }}"
                                class="btn btn-info mx-2 mb-2">Modifica</a>
                            <form>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $product->id }}">
                                    Elimina
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminazione Piatto</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Sei sicuro di voler eliminare questo piatto?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                    class="d-inline-block mx-2 mb-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    @if ($products->count() == 0)
        <h4>Attualmente non ci sono prodotti</h4>
        <a href="{{ route('admin.products.create') }}" class="btn btn-warning">Aggiungi un prodotto</a>
    @endif
@endsection
