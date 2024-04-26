@extends('layouts.admin')

@section('content')
@foreach ($products as $product)
<div class="card" style="width: 18rem;">
    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
    <div class="card-body">
      <h5 class="card-title">{{ $product->name }}</h5>
      <p class="card-text">Quantità ordinata: {{ $product->orders->first()->pivot->item_quantity }}</p>
      <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-primary">View Details</a>
    </div>
</div>
@endforeach
@endsection