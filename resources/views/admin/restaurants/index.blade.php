@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
                @foreach ($restaurants as $restaurant)
                    <div class="col">
                        <div class="card">
                            <div class="card-header">{{ $restaurant->name }}</div>
                            <div class="card-body">{{ $restaurant->description }}</div>
                            <div class="card-body">
                                @if (count($restaurant->tags) > 0)
                                    <ul>
                                        @foreach ($restaurant->tags as $tag)
                                            <li>{{ $tag->name }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <span>Non ci sono tag collegati</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
