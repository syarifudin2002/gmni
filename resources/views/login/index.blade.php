@extends('Beranda.layouts.mainloginregister')

@section('login')
    <div class="mt-5 mb-5 row justify-content-center">
        <div class="col-md-5">

            @if (session()->has('status'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

             @if (session()->has('loginerror'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginerror') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin w-100 m-auto">
                <form action="/login" method="POST">
                    @csrf
                    <img class="mb-4  d-block mx-auto" src="/image/gmni.png" alt="" width="100" height="87" />
                    <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid" @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}"/>
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="password" />
                        <label for="password">Password</label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">
                        Login
                    </button>
                    {{-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2025</p> --}}
                </form>
                <small class="d-block text-center mt-3">Not Registered?<a href="/register">Register Now!!!</a>
                </small>
            </main>
        </div>
    </div>
@endsection
