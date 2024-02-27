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
                            <a href="{{ route('admin.products.show', $product->id) }}"
                                class="btn btn-primary mx-2 mb-2">Info</a>
                            <a href="{{ route('admin.products.edit', $product->id) }}"
                                class="btn btn-info mx-2 mb-2">Modifica</a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                class="d-inline-block mx-2 mb-2">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Elimina" class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">
                            </form>
                        </div>

                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
