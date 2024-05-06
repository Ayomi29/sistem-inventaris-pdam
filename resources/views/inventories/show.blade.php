@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Show Data Inventaris</h1>
    </div>
    <div class="col-lg-8">
        <form class="mb-5" enctype="multipart/form-data">

            @csrf
            <div class="mb-3">
                <label for="division_id" class="form-label">Kode Bagian</label>
                <input type="text" class="form-control" id="division_id" name="division_id" readonly
                    value="{{ old('division_id', $inventory->employee->division->division_code) }}">
            </div>
            <div class="mb-3">
                <label for="employee_id" class="form-label">Pegawai</label>
                <input type="text" class="form-control" id="employee_id" name="employee_id" readonly
                    value="{{ old('employee_id', $inventory->employee->name) }}">
            </div>

            <div class="mb-3">
                <label for="division_name" class="form-label">Bagian</label>
                <input type="text" class="form-control" id="division_name" name="division_name" readonly
                    value="{{ old('division_name', $inventory->employee->division->name) }}">
            </div>
            <div class="mb-3">
                <label for="item_id" class="form-label">Barang</label>
                <input type="text" class="form-control" id="item_id" name="item_id" readonly
                    value="{{ old('item_id', $inventory->item->name) }}">
            </div>
            <div class="mb-3">
                <label for="item_code" class="form-label">Kode Barang</label>
                <input type="text" class="form-control" id="item_code" name="item_code" readonly
                    value="{{ old('item_code', $inventory->item->item_code) }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type Barang</label>
                <input type="text" class="form-control" id="type" name="type" readonly
                    value="{{ old('type', $inventory->item->type->name) }}">
            </div>
            <div class="mb-3">
                <label for="type_code" class="form-label">Kode Type</label>
                <input type="text" class="form-control" id="type_code" name="type_code" readonly
                    value="{{ old('type_code', $inventory->item->type->type_code) }}">
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Merek Barang</label>
                <input type="text" class="form-control" id="brand" name="brand" readonly
                    value="{{ old('brand', $inventory->item->brand->name) }}">
            </div>
            <div class="mb-3">
                <label for="unit_code" class="form-label">Kode Unit</label>
                <input type="text" class="form-control" id="unit_code" name="unit_code" readonly
                    value="{{ old('unit_code', $inventory->unit_code) }}">
            </div>
            <div class="mb-3">
                <label for="serial" class="form-label">Serial</label>
                <input type="text" class="form-control" id="serial" name="serial" readonly
                    value="{{ old('serial', $inventory->item->serial) }}">
            </div>
            <div class="mb-3">
                <label for="purchase_date" class="form-label">Tanggal Beli</label>
                <input type="text" class="form-control" id="purchase_date" name="purchase_date" readonly
                    value="{{ old('purchase_date', $inventory->item->purchase_date) }}">
            </div>
            <div class="mb-3">
                <label for="mac_address" class="form-label">MAC ADDRESS</label>
                <input type="text" class="form-control" id="mac_address" name="mac_address" readonly
                    value="{{ old('mac_address', $inventory->item->mac_address) }}">
            </div>
            <div class="mb-3">
                <label for="ip_address" class="form-label">IP ADDRESS</label>
                <input type="text" class="form-control" id="ip_address" name="ip_address" readonly
                    value="{{ old('ip_address', $inventory->item->ip_address) }}">
            </div>
            <div class="mb-3">
                <label for="item_state" class="form-label">Keadaan Barang</label>
                <input type="text" class="form-control" id="item_state" name="item_state" readonly
                    value="{{ old('item_state', $inventory->item->item_state) }}">
            </div>
            <div class="mb-3">
                <label for="updated_at" class="form-label">Update by:</label>
                <input type="text" class="form-control" id="user_id" name="user_id" readonly
                    value="{{ old('user_id', $inventory->user->name) }}">
            </div>
            <div class="mb-3">
                <label for="updated_at" class="form-label">Updated At:</label>
                <input type="text" class="form-control" id="updated_at" name="updated_at" readonly
                    value="{{ old('updated_at', $inventory->updated_at) }}">
            </div>


            <a href="/inventories" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
