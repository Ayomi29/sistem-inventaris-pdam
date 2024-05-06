@extends('layouts.main')
@section('container')
    <div class="container mt-4">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-5">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <main class="form-signin">
                    <form action="/login" method="post">
                        @csrf

                        <h1 class="h3 my-4 fw-normal text-center">Login</h1>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="name@example.com" autofocus required
                                value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password"
                                name="password"class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="d-inline invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="w-100 mt-3 btn btn-lg text-light" style="background-color: #084d9c"
                            type="submit">Login</button>
                    </form>
                    <small class="d-block text-center">Belum daftar? <a href="/register"> Daftar sekarang </a> </small>
                </main>
            </div>
        </div>
    </div>
@endsection
