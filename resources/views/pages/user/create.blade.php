@extends('layouts.app')

@section('title', 'Create New User')
@section('desc', ' Buat User Baru. ')

@section('content')
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>User Form</h4>
                    </div>
                        <input type="file" class="d-none" id="avatar" name="avatar">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Full Name (Nama Lengkap)</label>
                                <div class="col-sm-9">
                                    <input value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nama">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input value="{{ old('email') }}" type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="role" class="col-sm-3 col-form-label">Role</label>
                                <div class="col-sm-9">
                                    <select name="role" id="role" class="form-control text-capitalize @error('role') is-invalid @enderror">
                                        <option value="mahasiswa">mahasiswa</option>
                                        <option value="tim_psikolog">tim_psikolog</option>
                                        <option value="validator">validator</option>
                                        <option value="pimpinan">pimpinan</option>
                                        <option value="superadmin">superadmin</option>
                                    </select>
                                    @error('role')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input value="{{ old('username') }}" type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password_confirmation" class="col-sm-3 col-form-label">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="Password">
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Avatar</h4>
                    </div>
                    <div class="card-body">
                        <img alt="image" src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle w-100 mb-3">
                        <div class="clearfix"></div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="avatar" name="avatar">
                            <label class="custom-file-label" for="avatar">Choose Avatar</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
