@extends('layouts.main')
@section('container')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <main class="form-registration">
                    <h1 class="h3 mb-5 -bottom-3 mt-5 fw-normal text-center">Form Registerasi</h1>
                    <form action="/register" method="post">
                        @csrf
                        {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror"
                                name="name" id="name" placeholder="name" required value="{{ old('name') }}">
                            <label for="name">Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password"
                                class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password"
                                id="password" placeholder="Password" required value="{{ old('password') }}">
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                    </form>
                    <small class="d-block text-center mt-2 mb-4">Sudah memiliki akun? <a href="/login"
                            class="text-decoration-none">Silahkan login!</a></small>
                </main>
            </div>
        </div>
    </div>
@endsection
