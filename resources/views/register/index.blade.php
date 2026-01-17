@extends('Beranda.layouts.mainloginregister')

@section('register')
    <div class="mt-5 mb-5 row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <form action="/register" method="POST">
                    @csrf
                    <img class="mb-4  d-block mx-auto" src="/image/gmni.png" alt="" width="100" height="87" />
                    <h1 class="h3 mb-3 fw-normal text-center">Register Form</h1>
                    <div class="form-floating">
                        <input type="text" name="name"
                            class="form-control rounded-top @error('name') is-invalid" @enderror id="name"
                            placeholder="Name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username') is-invalid" @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                         @error('username')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid" @enderror" id="email"
                            placeholder="email@gmail.com" required value="{{ old('email') }}">
                        <label for="email">Email</label>
                         @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid" @enderror" id="password"
                            placeholder="Password">
                        <label for="password">Password</label>
                         @error('password')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">
                        Register
                    </button>
                    {{-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2025</p> --}}
                </form>
                <small class="d-block text-center mt-3">Already Register?<a href="/login">Login!!!</a>
                </small>
            </main>
        </div>
    </div>
@endsection
