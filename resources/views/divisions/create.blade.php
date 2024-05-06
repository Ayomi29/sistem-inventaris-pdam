@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Bagian Baru</h1>
    </div>
    <div class="col-lg-8">
        <form action="/divisions" method="POST" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Bagian</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="division_code" class="form-label">Kode Bagian</label>
                <input type="text" class="form-control @error('division_code') is-invalid @enderror" id="division_code"
                    name="division_code" required value="{{ old('division_code') }}">
                @error('division_code')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Create Bagian</button>
            <a href="/divisions" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
