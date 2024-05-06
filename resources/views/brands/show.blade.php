@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Show Merek</h1>
    </div>
    <div class="col-lg-8">
        <form class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Merek</label>
                <input type="text" class="form-control" id="name" name="name" readonly
                    value="{{ old('name', $brand->name) }}">
            </div>
            <a href="/brands" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
