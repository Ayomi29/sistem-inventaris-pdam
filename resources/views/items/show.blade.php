@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Show Data Barang</h1>
    </div>
    <div class="col-lg-8">
        <form class="mb-5" enctype="multipart/form-data">

            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="name" name="name" readonly
                    value="{{ old('name', $item->name) }}">
            </div>
            <div class="mb-3">
                <label for="item_code" class="form-label">Kode Barang</label>
                <input type="text" class="form-control" id="item_code" name="item_code" readonly
                    value="{{ old('item_code', $item->item_code) }}">
            </div>
            <div class="mb-3">
                <label for="type_id" class="form-label">Type Barang</label>
                <input type="text" class="form-control" id="type_id" name="type_id" readonly
                    value="{{ old('type_id', $item->type->name) }}">
            </div>
            <div class="mb-3">
                <label for="type_code" class="form-label">Kode Type</label>
                <input type="text" class="form-control" id="type_code" name="type_code" readonly
                    value="{{ old('type_code', $item->type->type_code) }}">
            </div>
            <div class="mb-3">
                <label for="brand_id" class="form-label">Merek Barang</label>
                <input type="text" class="form-control" id="brand_id" name="brand_id" readonly
                    value="{{ old('brand_id', $item->brand->name) }}">
            </div>

            <div class="mb-3">
                <label for="serial" class="form-label">Serial Number</label>
                <input type="text" class="form-control" id="serial" name="serial" readonly
                    value="{{ old('serial', $item->serial) }}">
            </div>
            <div class="mb-3">
                <label for="purchase_date" class="form-label">Tanggal Beli</label>
                <input type="text" class="form-control" id="purchase_date" name="purchase_date" readonly
                    value="{{ old('purchase_date', $item->purchase_date) }}">
            </div>
            <div class="mb-3">
                <label for="mac_address" class="form-label">MAC ADDRESS</label>
                <input type="text" class="form-control" id="mac_address" name="mac_address" readonly
                    value="{{ old('mac_address', $item->mac_address) }}">
            </div>
            <div class="mb-3">
                <label for="ip_address" class="form-label">IP ADDRESS</label>
                <input type="text" class="form-control" id="ip_address" name="ip_address" readonly
                    value="{{ old('ip_address', $item->ip_address) }}">
            </div>
            <div class="mb-3">
                <label for="item_state" class="form-label">Keadaan Barang</label>
                <input type="text" class="form-control" id="item_state" name="item_state" readonly
                    value="{{ old('item_state', $item->item_state) }}">
            </div>

            <a href="/items" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
