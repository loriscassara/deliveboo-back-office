@extends('layouts.admin')

@section('content')
<div class="p-3">
  <h1 class="text-center  text-white p-1 bg-green"><strong>Dettagli dell'ordine</strong></h1>
</div>
  <div class="d-flex gap-3 justify-content-center">
    @foreach ($products as $product)
  <div class="card text-center p-2" style="width: 30rem;">
      <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top rounded-circle mx-auto w-50 h-50" alt="{{ $product->name }}">
      <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">Quantità ordinata: {{ $product->orders->first()->pivot->item_quantity }}</p>
        <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-primary">Visualizza dettagli</a>
      </div>
</div>

@endforeach

</div>

@endsection