@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <h2>New Restaurant</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">
            <form action="{{ route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="business_name" class="form-label">Restaurant Name</label>
                    <input type="text" class="form-control @error('business_name') is-invalid @enderror"
                        id="business_name" name="business_name" value="{{ old('business_name') }}">
                    @error('business_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="cover_image" class="form-label">Restaurant Image</label>
                    <input type="file" class="form-control @error('cover_image') is-invalid @enderror" id="cover_image"
                        name="cover_image" placeholder="choose an image" value="{{ old('cover_image') }}">
                    @error('cover_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                        name="address" value="{{ old('address') }}">
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="P_IVA" class="form-label">P.IVA</label>
                    {{-- <input type="text" class="form-control @error('P_IVA') is-invalid @enderror" id="P_IVA"
                        name="P_IVA" value="{{ old('P_IVA') }}"> --}}
                    <input type="number" class="form-control" @error('P_IVA') is-invalid @enderror" id="P_IVA"
                        name="P_IVA" min="00000000000" min="99999999999" />
                    @error('P_IVA')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone number</label>
                    {{-- <input type="text" class="form-control @error('P_IVA') is-invalid @enderror" id="P_IVA"
                        name="P_IVA" value="{{ old('P_IVA') }}"> --}}
                    <input type="text" class="form-control" @error('phone') is-invalid @enderror" id="phone"
                        name="phone" />
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="types" class="form-label">Cuisines</label>
                        @foreach ($types as $type)
                            <input class="form-check-input" type="checkbox" value="{{ $type->id }}" name="types[]" id="flexCheckDefault">{{ $type->name }}
                            {{-- <option value="{{ $type->id }}">{{ $type->name }}</option>  --}}
                        @endforeach
                    {{-- <select multiple name="types[]" id="" class="form-select">

                    </select> --}}
                </div>

                <button type="submit" class="btn btn-primary">Add restaurant</button>
            </form>
        </div>
    </div>
@endsection
