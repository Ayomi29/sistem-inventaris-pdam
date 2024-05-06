@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Inventaris</h1>
        </div>


        <div class="table-responsive rounded mb-3 ">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <a href="/inventories/create" class="btn btn-primary mb-3">Create Data Inventaris</a>
            <table class="data-table table mb-0 tbl-server-info" style="overflow: ">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>No</th>
                        <th>Kode Divisi</th>
                        <th>Pegawai</th>
                        <th>Divisi</th>
                        <th>Barang</th>
                        <th>Kode Barang</th>
                        <th>Type Barang</th>
                        <th>Kode Type</th>
                        <th>Merek</th>
                        <th>Kode Unit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="ligth-body">
                    @foreach ($inventories as $inventory)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $inventory->employee->division->division_code }}</td>
                            <td>{{ $inventory->employee->division->name }}</td>
                            <td>{{ $inventory->employee->name }}</td>
                            <td>{{ $inventory->item->name }}</td>
                            <td>{{ $inventory->item->item_code }}</td>
                            <td>{{ $inventory->item->type->name }}</td>
                            <td>{{ $inventory->item->type->type_code }}</td>
                            <td>{{ $inventory->item->brand->name }}</td>
                            <td>{{ $inventory->unit_code }}</td>
                            <td>
                                <a href="/inventories/{{ $inventory->id }}" class="badge bg-info"><span
                                        data-feather="eye"></span></a>
                                <a href="/inventories/{{ $inventory->id }}/edit" class="badge bg-warning"><span
                                        data-feather="edit"></span></a>
                                <form action="/inventories/{{ $inventory->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus divisi ini?')"><span
                                            data-feather="x-circle"></span></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
