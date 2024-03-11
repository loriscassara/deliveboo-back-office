@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card border-green my-2">
                        <div class="card-header bg-green text-white fw-bold fs-5">{{ $product->name }}</div>
                        <div class="card-body">{{ $product->description }}</div>
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                                alt="{{ $product->name }}">
                        @endif
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('admin.products.edit', $product->id) }}"
                                class="btn btn-info mx-2 mb-2 fw-bold">Modifica</a>
                            <form>
                                <button type="button" class="btn btn-danger fw-bold" data-bs-toggle="modal"
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
                        <div class="modal-content border-green">
                            <div class="modal-header bg-green text-white">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminazione Piatto</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="fs-5">Sei sicuro di voler eliminare questo piatto?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Annulla</button>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                    class="d-inline-block mx-2 mb-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger fw-bold">Elimina</button>
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
    @endif
@endsection
