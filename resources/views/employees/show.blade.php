@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Show Data Pegawai</h1>
    </div>
    <div class="col-lg-8">
        <form class="mb-5" enctype="multipart/form-data">

            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="name" name="name" readonly
                    value="{{ old('name', $employee->name) }}">
            </div>
            <div class="mb-3">
                <label for="division_id" class="form-label">Kode Pegawai</label>
                <input type="text" class="form-control" id="division_id" name="division_id" readonly
                    value="{{ old('division_id', $employee->division->name) }}">
            </div>
            <div class="mb-3">
                <label for="division_code" class="form-label">Kode Pegawai</label>
                <input type="text" class="form-control" id="division_code" name="division_code" readonly
                    value="{{ old('division_code', $employee->division->division_code) }}">
            </div>


            <a href="/employees" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
