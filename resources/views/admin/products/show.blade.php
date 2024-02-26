@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>{{ $product->name }}</h2>
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top w-50" alt="{{ $product->name }}">
            @endif
            <h3>{{ $product->ingredients }}</h3>
            <p>{{ $product->description }}</p>
            <p>{{ $product->price }} €</p>
        </div>
        <div class="row">
            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('admin.products.index') }}" class="btn btn-primary mt-3">Return to menù</a>
        </div>
    </div>
@endsection
