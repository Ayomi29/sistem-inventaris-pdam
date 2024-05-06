@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Barang Baru</h1>
    </div>
    <div class="col-lg-8">
        <form action="/items" method="POST" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="name" name="name" required
                    value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="item_code" class="form-label">Kode Barang</label>
                <input type="text" class="form-control" id="item_code" name="item_code" required
                    value="{{ old('item_code') }}">
            </div>

            <div class="mb-3">
                <label for="type_id" class="form-label">Type Barang</label>
                <select class="form-select" name='type_id'>
                    @foreach ($types as $type)
                        @if (old('type_id') == $type->id)
                            <option value="{{ $type->id }}" selected>
                                {{ $type->name }}
                            </option>
                        @else
                            <option value="{{ $type->id }}">
                                {{ $type->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="brand_id" class="form-label">Merek</label>
                <select class="form-select" name='brand_id'>
                    @foreach ($brands as $brand)
                        @if (old('brand_id') == $brand->id)
                            <option value="{{ $brand->id }}" selected>
                                {{ $brand->name }}
                            </option>
                        @else
                            <option value="{{ $brand->id }}">
                                {{ $brand->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="serial" class="form-label">Serial Number</label>
                <input type="text" class="form-control" id="serial" name="serial" value="{{ old('serial') }}">
            </div>
            <div class="mb-3">
                <label for="purchase_date" class="form-label">Tanggal Beli</label>
                <input type="text" class="form-control" id="purchase_date" name="purchase_date"
                    value="{{ old('purchase_date') }}">
            </div>
            <div class="mb-3">
                <label for="mac_address" class="form-label">MAC ADDRESS</label>
                <input type="text" class="form-control" id="mac_address" name="mac_address"
                    value="{{ old('mac_address') }}">
            </div>
            <div class="mb-3">
                <label for="ip_address" class="form-label">IP ADDRESS</label>
                <input type="text" class="form-control" id="ip_address" name="ip_address"
                    value="{{ old('ip_address') }}">
            </div>
            <div class="mb-3">
                <label for="item_state" class="form-label">Keadaan Barang</label>
                <input type="text" class="form-control" id="item_state" name="item_state" required
                    value="{{ old('item_state') }}">
            </div>

            <button type="submit" class="btn btn-primary">Create Barang</button>
            <a href="/items" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
