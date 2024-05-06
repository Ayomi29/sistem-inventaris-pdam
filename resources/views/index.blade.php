@extends('layouts.app')
@section('content')
    <div class="row my-5">
        <h3 class="mb-3">SIRIKO PERUMDA Tirta Manuntung Balikpapan</h3>
        @foreach ($divisions as $division)
            <div class="col-md-3">
                <a href="" class="text-decoration-none">
                    <div class="card rounded text-white mt-3" style="background-color: #0f123f">
                        <div class="d-flex align-items-center p-0">
                            <a href="/divisions/{{ $division->id }}" class="btn text-white text-center flex-fill p-2"
                                style="background-color: #0f123f">
                                {{ $division->name }}</a>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
