@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="../assets/img/apple-touch-icon.png" alt="logo" width="100"
                            class="shadow-light rounded-circle">
                    </div>
                    @if (session('status'))
                        <div class="mb-4 alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card card-primary">
                        <div class="card-header justify-content-center">
                            <h4>Forgot Password</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">Kami akan mengirim link ke email kamu untuk melakukan reset password</p>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input
                                        id="email"
                                        type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        name="email"
                                        tabindex="1"
                                        autofocus
                                    >
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Lupa Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright {{ date('Y') }} &copy; {{ env('APP_NAME') }} <div class="bullet"></div> Code by <a href="https://instagram.com/mamalikhsani">M. Amal Ikhsani</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
