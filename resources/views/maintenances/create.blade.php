@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Data Maintenance Baru</h1>
    </div>
    <div class="col-lg-8">
        <form action="/maintenances" method="POST" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="employee_id" class="form-label">Pegawai</label>
                <select class="form-select" name='employee_id'>
                    @foreach ($employees as $employee)
                        @if (old('employee_id') == $employee->id)
                            <option value="{{ $employee->id }}" selected>
                                {{ $employee->name }}
                            </option>
                        @else
                            <option value="{{ $employee->id }}">
                                {{ $employee->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="item_id" class="form-label">Item</label>
                <select class="form-select" name='item_id'>
                    @foreach ($items as $item)
                        @if (old('item_id') == $item->id)
                            <option value="{{ $item->id }}" selected>
                                {{ $item->name }}
                            </option>
                        @else
                            <option value="{{ $item->id }}">
                                {{ $item->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="planning" class="form-label">Rencana</label>
                <input type="text" class="form-control" id="planning" name="planning" required
                    value="{{ old('planning') }}">
            </div>

            <div class="mb-3">
                <label for="realisation" class="form-label">Realisasi</label>
                <input type="text" class="form-control" id="realisation" name="realisation" required
                    value="{{ old('realisation') }}">
            </div>

            <button type="submit" class="btn btn-primary">Create Data</button>
            <a href="/maintenances" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
