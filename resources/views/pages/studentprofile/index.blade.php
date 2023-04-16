@extends('layouts.app')

@section('title', 'Student Profile')
@section('desc', ' Profil Mahasiswa. ')

@section('content')
<div class="card">
    <form action="{{ route('studentprofile-store') }}" method="POST" class="mb-2">
        @method('POST')
        @csrf
        <div class="card-header">
            <h4>Profile</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" id="name-lengkap" value="{{ auth()->user()->name }}"readonly>
            </div>
            <div class="form-group">
                <label for="npm" class="form-label">NPM</label>
                <input type="number" class="form-control  @error('npm') is-invalid @enderror" id="npm"
                    placeholder="Masukkan NPM">
                @error('npm')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-control @error('jurusan') is-invalid @enderror"
                    aria-label="Default select example" id="jurusan">
                    <option selected>Pilih Jurusan</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jalur-masuk" class="form-label">Jalur Masuk</label>
                <select class="form-control" aria-label="Default select example">
                    <option selected>Pilih Jalur Masuk</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="form-group">
                <label for="semester" class="form-label">Semester</label>
                <input type="number" class="form-control @error('semester') is-invalid @enderror" id="semester"
                    placeholder="Masukkan semester saat ini">
                @error('semester')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="beasiswa" class="form-label">Apakah Anda mendapatkan beasiswa </label>
                <select class="form-control" aria-label="Default select example">
                    <option value="1">Tidak</option>
                    <option value="2">Ya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pendapatan" class="form-label">Pendapatan orangtua/ bulan</label>
                <select class="form-control" aria-label="Default select example">
                    <option value="1">0 - 1.000.000</option>
                    <option value="2">1.000.001 - 2.500.000</option>
                    <option value="3">2.500.001 - 5.000.000</option>
                    <option value="3">> 5000.001</option>
                </select>
            </div>
            <div class="form-group">
                <label for="saku" class="form-label">Uang saku selama satu bulan </label>
                <select class="form-control" aria-label="Default select example">
                    <option value="1">0 - 1.000.000</option>
                    <option value="2">1.000.001 - 2.500.000</option>
                    <option value="3">2.500.001 - 5.000.000</option>
                    <option value="3">> 5000.001</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ip" class="form-label">Indeks Prestasi (IP)</label>
                <input type="number" class="form-control @error('ip') is-invalid @enderror" id="ip"
                    placeholder="Masukkan Indeks Prestasi saat ini">
                @error('ip')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ipk" class="form-label">Indeks Prestasi Kumulatif (IPK)</label>
                <input type="number" class="form-control @error('ipk') is-invalid @enderror" id="ipk"
                    placeholder="Masukkan Indeks Prestasi Kumulatif saat ini">
                @error('ipk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-success">Simpan</button>
            <button class="btn btn-primary">Kirim</button>
        </div>
    </form>
</div>
@endsection
