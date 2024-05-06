@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Maintenance</h1>
        </div>


        <div class="table-responsive rounded mb-3 ">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <a href="/maintenances/create" class="btn btn-primary mb-3">Create Data Maintenance</a>
            <table class="data-table table mb-0 tbl-server-info" style="overflow: ">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Pegawai</th>
                        <th>Divisi</th>
                        <th>Type Barang</th>
                        <th>Rencana</th>
                        <th>Realisasi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="ligth-body">
                    @foreach ($maintenances as $maintenance)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $maintenance->item->item_code }}</td>
                            <td>{{ $maintenance->employee->name }}</td>
                            <td>{{ $maintenance->employee->division->name }}</td>
                            <td>{{ $maintenance->item->type->name }}</td>
                            <td>{{ $maintenance->planning }}</td>
                            <td>{{ $maintenance->realisation }}</td>
                            <td>
                                <a href="/maintenances/{{ $maintenance->id }}" class="badge bg-info"><span
                                        data-feather="eye"></span></a>
                                <a href="/maintenances/{{ $maintenance->id }}/edit" class="badge bg-warning"><span
                                        data-feather="edit"></span></a>
                                <form action="/maintenances/{{ $maintenance->id }}" method="post" class="d-inline">
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
