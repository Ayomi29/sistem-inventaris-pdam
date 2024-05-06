@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Pegawai Baru</h1>
    </div>
    <div class="col-lg-8">
        <form action="/employees" method="POST" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="division_id" class="form-label">Bagian</label>
                <select class="form-select" name='division_id'>
                    @foreach ($divisions as $division)
                        @if (old('division_id') == $division->id)
                            <option value="{{ $division->id }}" selected>{{ $division->name }}</option>
                        @else
                            <option value="{{ $division->id }}">{{ $division->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create Pegawai</button>
            <a href="/employees" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
