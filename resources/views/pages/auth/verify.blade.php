@extends('layouts.auth')

@section('title', 'Verify')

@section('content')
    <section class="section">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4">
                    <div class="login-brand">
                        <img src="../assets/img/apple-touch-icon.png" alt="logo" width="100"
                            class="shadow-light rounded-circle">
                    </div>
                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 alert alert-success">
                            Email yang baru telah dikirim ke emailmu.
                        </div>
                    @endif
                    <div class="card card-primary">
                        <div class="card-header justify-content-center">
                            <h4>Emailmu tidak terdaftar.</h4>
                        </div>
                        <div class="card-body">
                            <p>Cek emailmulalu tekan link email verifikasi.</p>
                            <div class="form-group">
                                <form action="{{ route('verification.send') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Resend Verification Email
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright {{ date('Y') }} &copy; {{ env('APP_NAME') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
