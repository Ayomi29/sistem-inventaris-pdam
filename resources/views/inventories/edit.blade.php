@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Inventaris</h1>
    </div>
    <div class="col-lg-8">
        <form action="/inventories/{{ $inventory->id }}" method="POST" class="mb-5" enctype="form-data">
            @method('PUT')
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
                <label for="item_id" class="form-label">Pegawai</label>
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
                <label for="unit_code" class="form-label">Kode Unit</label>
                <input type="text" class="form-control" id="unit_code" name="unit_code" required
                    value="{{ old('unit_code', $inventory->unit_code) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Data</button>
            <a href="/inventories" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
