@extends('layouts.admin')

@section('content')
    <div class="container-fluid d-flex flex-column align-items-center">
        <div class="row d-flex flex-column align-items-center">
            <h2 class="text-center">{{ $product->name }}</h2>
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top w-50 p-4 rounded-circle" alt="{{ $product->name }}">
            @endif
            <h3 class="text-center">{{ $product->ingredients }}</h3>
            <p class="text-center"> {{ $product->description }}</p>
            <p class="text-center">{{ $product->price }} €</p>
        </div>
        <div class="row">
            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning">Modifica</a>
            <a href="{{ route('admin.products.index') }}" class="btn btn-primary mt-3">Indietro</a>
        </div>
    </div>
@endsection
