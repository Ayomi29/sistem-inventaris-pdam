@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Type Barang Baru</h1>
    </div>
    <div class="col-lg-8">
        <form action="/types" method="POST" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Type Barang</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type_code" class="form-label">Kode Type Barang</label>
                <input type="text" class="form-control @error('type_code') is-invalid @enderror" id="type_code"
                    name="type_code" required value="{{ old('type_code') }}">
                @error('type_code')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Create Type Barang</button>
            <a href="/types" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
