@extends('layouts.app')

@section('title', 'Student Profile')
@section('desc', ' Profil Mahasiswa. ')

@section('content')
@if($item)
@if($item->status=="allow")
<div class="card">
        <div class="card-header">
            <h4>Profile</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama-lengkap" value="{{ auth()->user()->name }}" readonly disabled>
            </div>
            <div class="form-group">
                <label for="npm" class="form-label">NIM/NPM</label>
                <input type="text" class="form-control" id="npm" value="{{ $item->npm }}" readonly disabled>
            </div>
            <div class="form-group">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" value="{{ $item->jurusan }}" readonly disabled>
            </div>
            <div class="form-group">
                <label for="prodi" class="form-label">Program Studi</label>
                <input type="text" class="form-control" id="prodi" value="{{ $item->prodi }}" readonly disabled>
            </div>
            <div class="form-group">
                <label for="jalur_masuk" class="form-label">Jalur Masuk</label>
                <input type="text" class="form-control" id="jalur_masuk" value="{{ $item->jalur_masuk }}" readonly disabled>
            </div>
            <div class="form-group">
                <label for="beasiswa" class="form-label">Apakah Anda Mendapatkan Beasiswa</label>
                <input type="text" class="form-control" id="beasiswa" value="{{ $item->beasiswa }}" readonly disabled>
            </div>
            <div class="form-group">
                <label for="pendapatan" class="form-label">Pendapatan Orang Tua Perbulan</label>
                <input type="text" class="form-control" id="pendapatan" value="{{ $item->pendapatan_orangtua }}" readonly disabled>
            </div>
            <div class="form-group">
                <label for="saku" class="form-label">Uang Saku Perbulan</label>
                <input type="text" class="form-control" id="saku" value="{{ $item->uang_saku_satu_bulan }}" readonly disabled>
            </div>
            <div class="form-group">
                <label for="ip" class="form-label">Index Prestasi (IP)</label>
                <input type="text" class="form-control" id="ip" value="{{ $item->index_prestasi }}" readonly disabled>
            </div>
            <div class="form-group">
                <label for="ipk" class="form-label">Index Prestasi Kumulatif (IPK)</label>
                <input type="text" class="form-control" id="ipk" value="{{ $item->index_prestasi_kumulatif }}" readonly disabled>
            </div>
        </div>
</div>
@else
<div class="card">
    <form action="{{ route('studentprofile-update',$item->id) }}" method="POST" class="mb-2">
        @method('PUT')
        @csrf
        <div class="card-header">
            <h4>Profile</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama-lengkap" value="{{ auth()->user()->name }}" readonly disabled>
            </div>
            <div class="form-group">
                <label for="npm" class="form-label">NIM/NPM</label>
                <input type="number" name="npm" class="form-control  @error('npm') is-invalid @enderror" id="npm"
                    placeholder="Masukkan NIM/NPM"  value="{{ old('npm',$item->npm) }}">
                @error('npm')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan">
                    <option value="">Pilih Jurusan</option>
                    <optgroup label="Magister Terapan">
                        <option value="Teknik Energi Terbarukan" {{ $item->jurusan == "Teknik Energi Terbarukan" ? 'selected' : '' }}>Teknik Energi Terbarukan</option>
                        <option value="Pemasaran, Inovasi dan Teknologi" {{ $item->jurusan == "Pemasaran, Inovasi dan Teknologi" ? 'selected' : '' }}>Pemasaran, Inovasi dan Teknologi</option>
                    </optgroup>
                    <optgroup label="Diploma IV/Sarjana Terapan">
                        <option value="Perancangan Jalan dan Jembatan (Kampus Palembang dan PSDKU OKU)" {{ $item->jurusan == "Perancangan Jalan dan Jembatan (Kampus Palembang dan PSDKU OKU)" ? 'selected' : '' }}>Perancangan Jalan dan Jembatan (Kampus Palembang dan PSDKU OKU)</option>
                        <option value="Teknik Mesin Produksi dan Perawatan (Kampus Palembang dan PSDKU SIAK RIAU)" {{ $item->jurusan == "Teknik Mesin Produksi dan Perawatan (Kampus Palembang dan PSDKU SIAK RIAU)" ? 'selected' : '' }}>Teknik Mesin Produksi dan Perawatan (Kampus Palembang dan PSDKU SIAK RIAU)</option>
                        <option value="Teknik Energi" {{ $item->jurusan == "Teknik Energi" ? 'selected' : '' }}>Teknik Energi</option>
                        <option value="Teknologi Kimia Industri" {{ $item->jurusan == "Teknologi Kimia Industri" ? 'selected' : '' }}>Teknologi Kimia Industri</option>
                        <option value="Akuntansi Sektor Publik (Kampus Palembang, PSDKU OKU dan PSDKU Siak RIAU)" {{ $item->jurusan == "Akuntansi Sektor Publik (Kampus Palembang, PSDKU OKU dan PSDKU Siak RIAU)" ? 'selected' : '' }}>Akuntansi Sektor Publik (Kampus Palembang, PSDKU OKU dan PSDKU Siak RIAU)</option>
                        <option value="Teknik Elektro (Konsentrasi Mekatronika)" {{ $item->jurusan == "Teknik Elektro (Konsentrasi Mekatronika)" ? 'selected' : '' }}>Teknik Elektro (Konsentrasi Mekatronika)</option>
                        <option value="Teknik Telekomunikasi" {{ $item->jurusan == "Teknik Telekomunikasi" ? 'selected' : '' }}>Teknik Telekomunikasi</option>
                        <option value="Usaha Perjalanan Wisata" {{ $item->jurusan == "Usaha Perjalanan Wisata" ? 'selected' : '' }}>Usaha Perjalanan Wisata</option>
                        <option value="Manajemen Bisnis" {{ $item->jurusan == "Manajemen Bisnis" ? 'selected' : '' }}>Manajemen Bisnis</option>
                        <option value="Teknologi Informatika Multimedia Digital" {{ $item->jurusan=="Teknologi Informatika Multimedia Digital"?'selected':''}}>Teknologi Informatika Multimedia Digital</option>
                        <option value="Teknologi Produksi Tanaman Perkebunan (Kampus Banyuasin)" {{ $item->jurusan=="Teknologi Produksi Tanaman Perkebunan (Kampus Banyuasin)"?'selected':''}}>Teknologi Produksi Tanaman Perkebunan (Kampus Banyuasin)</option>
                    </optgroup>
                    <optgroup label="Diploma III">
                        <option value="Teknik Sipil" {{ $item->jurusan=="Teknik Sipil"?'selected':''}}>Teknik Sipil</option>
                        <option value="Teknik Mesin" {{ $item->jurusan=="Teknik Mesin"?'selected':''}}>Teknik Mesin</option>
                        <option value="Teknik Listrik" {{ $item->jurusan=="Teknik Listrik"?'selected':''}}>Teknik Listrik</option>
                        <option value="Teknik Elektronika" {{ $item->jurusan=="Teknik Elektronika"?'selected':''}}>Teknik Elektronika</option>
                        <option value="Teknik Telekomunikasi" {{ $item->jurusan=="Teknik Telekomunikasi"?'selected':''}}>Teknik Telekomunikasi</option>
                        <option value="Teknik Kimia (Kampus Palembang dan PSDKU SIAK RIAU)" {{ $item->jurusan=="Teknik Kimia (Kampus Palembang dan PSDKU SIAK RIAU)"?'selected':''}}>Teknik Kimia (Kampus Palembang dan PSDKU SIAK RIAU)</option>
                        <option value="Akuntansi" {{ $item->jurusan=="Akuntansi"?'selected':''}}>Akuntansi</option>
                        <option value="Administrasi Bisnis (Kampus Palembang dan PSDKU OKU)" {{ $item->jurusan=="Administrasi Bisnis (Kampus Palembang dan PSDKU OKU)"?'selected':''}}>Administrasi Bisnis (Kampus Palembang dan PSDKU OKU)</option>
                        <option value="Teknik Komputer" {{ $item->jurusan=="Teknik Komputer"?'selected':''}}>Teknik Komputer</option>
                        <option value="Manajemen Informatika Program" {{ $item->jurusan=="Manajemen Informatika Program"?'selected':''}}>Manajemen Informatika Program</option>
                        <option value="Teknologi Pangan (Kampus Banyuasin)" {{ $item->jurusan=="Teknologi Pangan (Kampus Banyuasin)"?'selected':''}}>Teknologi Pangan (Kampus Banyuasin)</option>
                    <optgroup label="Diploma II">
                        <option value="Diploma II (Program Studi di Luar Domisili/PDD) Akuntansi" {{ $item->jurusan=="Diploma II (Program Studi di Luar Domisili/PDD) Akuntansi"?'selected':''}}>Diploma II (Program Studi di Luar Domisili/PDD) Akuntansi</option>
                        <option value="Adminisrasi Bisnis Program Studi Administrasi Bisnis (Kota Prabumulih)" {{ $item->jurusan=="Adminisrasi Bisnis Program Studi Administrasi Bisnis (Kota Prabumulih)"?'selected':''}}>Adminisrasi Bisnis Program Studi Administrasi Bisnis (Kota Prabumulih)</option>
                        <option value="Teknik Komputer Program Studi Teknik Komputer (Kota Prabumulih)" {{ $item->jurusan=="Teknik Komputer Program Studi Teknik Komputer (Kota Prabumulih)"?'selected':''}}>Teknik Komputer Program Studi Teknik Komputer (Kota Prabumulih)</option>
                        <option value="Manajemen Informatika Program Studi Manajemen Informatika (Kota Pangkalpinang)" {{ $item->jurusan=="Manajemen Informatika Program Studi Manajemen Informatika (Kota Pangkalpinang)"?'selected':''}}>Manajemen Informatika Program Studi Manajemen Informatika (Kota Pangkalpinang)</option>
                    </optgroup>
                    <optgroup label="Diploma I">
                        <option value="Diploma I (Program Studi di Luar Domisili/PDD) Manajemen Informatika (Kota Pagaralam)" {{ $item->jurusan=="Diploma I (Program Studi di Luar Domisili/PDD) Manajemen Informatika (Kota Pagaralam)"?'selected':''}}>Diploma I (Program Studi di Luar Domisili/PDD) Manajemen Informatika (Kota Pagaralam)</option>
                    </optgroup>
                </select>
                @error('jurusan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="prodi" class="form-label">Program Studi</label>
                <select name="prodi" class="form-control @error('prodi') is-invalid @enderror" id="prodi">
                    <option value="">Pilih Program Studi</option>
                    <option value="D3" {{ $item->prodi == "D3" ? 'selected' : ''  }}>D3</option>
                    <option value="D4" {{ $item->prodi == "D4" ? 'selected' : ''  }}>D4</option>
                </select>
                @error('prodi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jalur_masuk" class="form-label">Jalur Masuk</label>
                <select name="jalur_masuk" class="form-control @error('jalur-masuk') is-invalid @enderror" id="jalur_masuk">
                    <option value="">Pilih Jalur Masuk</option>
                    <option value="SMM" {{ $item->jalur_masuk == "SMM" ? 'selected' : '' }}>Jalur Seleksi Masuk Mandiri (SMM)</option>
                    <option value="UMPN" {{ $item->jalur_masuk == "UMPN" ? 'selected' : '' }}>Jalur Ujian Masuk Politeknik Negeri (UMPN)</option>
                    <option value="PMDK-PN" {{ $item->jalur_masuk == "PMDK-PN" ? 'selected' : '' }}>Jalur Penelusuran Minat dan Kemampuan-Politeknik Negeri (PMDK-PN)</option>
                    <option value="Bidikmisi" {{ $item->jalur_masuk == "Bidikmisi" ? 'selected' : '' }}>Jalur Beasiswa Bidikmisi</option>
                    <option value="PDD" {{ $item->jalur_masuk == "PDD" ? 'selected' : '' }}>Jalur Program Studi Di Luar Domisili (PDD)</option>
                    <option value="Alih Jenjang" {{ $item->jalur_masuk == "Alih Jenjang" ? 'selected' : '' }}>Jalur Alih Jenjang (Sarjana Terapan)</option>
                    <option value="S2 Terapan" {{ $item->jalur_masuk == "S2 Terapan" ? 'selected' : '' }}>Jalur Magister Terapan (S2 Terapan)</option>
                </select>
                @error('jalur_masuk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="beasiswa" class="form-label">Apakah Anda Mendapatkan Beasiswa</label>
                <select name="beasiswa" class="form-control @error('beasiswa') is-invalid @enderror" id="beasiswa">
                    <option value="">Pilih Apakah Anda Mendapatkan Beasiswa</option>
                    <option value="Tidak" {{ $item->beasiswa=="Tidak"?'selected':'' }}>Tidak</option>
                    <option value="Ya" {{ $item->beasiswa=="Ya"?'selected':'' }}>Ya</option>
                </select>
                @error('beasiswa')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="pendapatan" class="form-label">Pendapatan Orang Tua Perbulan</label>
                <select name="pendapatan" class="form-control @error('pendapatan') is-invalid @enderror" id="pendapatan">
                    <option value="">Pilih Pendapatan Orang Tua</option>
                    <option value="0 - 1.000.000" {{ $item->pendapatan_orangtua=="0 - 1.000.000"?'selected':'' }}>0 - 1.000.000</option>
                    <option value="1.000.001 - 2.500.000" {{ $item->pendapatan_orangtua=="1.000.001 - 2.500.000"?'selected':'' }}>1.000.001 - 2.500.000</option>
                    <option value="2.500.001 - 5.000.000" {{ $item->pendapatan_orangtua=="2.500.001 - 5.000.000"?'selected':'' }}>2.500.001 - 5.000.000</option>
                    <option value="> 5.000.001" {{ $item->pendapatan_orangtua=="> 5.000.001"?'selected':'' }}> > 5.000.001</option>
                </select>
                @error('pendapatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="saku" class="form-label">Uang Saku Perbulan</label>
                <select name="saku" class="form-control @error('saku') is-invalid @enderror" id="saku">
                    <option value="">Pilih Uang Saku Perbulan</option>
                    <option value="0 - 1.000.000" {{ $item->uang_saku_satu_bulan=="0 - 1.000.000"?'selected':'' }}>0 - 1.000.000</option>
                    <option value="1.000.001 - 2.500.000" {{ $item->uang_saku_satu_bulan=="1.000.001 - 2.500.000"?'selected':'' }}>1.000.001 - 2.500.000</option>
                    <option value="2.500.001 - 5.000.000" {{ $item->uang_saku_satu_bulan=="2.500.001 - 5.000.000"?'selected':'' }}>2.500.001 - 5.000.000</option>
                    <option value="> 5.000.001" {{ $item->uang_saku_satu_bulan=="> 5.000.001"?'selected':'' }}> > 5.000.001</option>
                </select>
                @error('saku')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ip" class="form-label">Indeks Prestasi (IP)</label>
                <input type="text" name="ip" class="form-control @error('ip') is-invalid @enderror" id="ip" placeholder="Masukkan Indeks Prestasi Saat Ini"  value="{{ old('ip',$item->index_prestasi) }}">
                @error('ip')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ipk" class="form-label">Indeks Prestasi Kumulatif (IPK)</label>
                <input type="text" name="ipk" class="form-control @error('ipk') is-invalid @enderror" id="ipk" placeholder="Masukkan Indeks Prestasi Kumulatif Saat Ini" value="{{ old('ipk',$item->index_prestasi_kumulatif) }}">
                @error('ipk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="card-footer text-right">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary" id="btn2">Submit</button>
        </div>
    </form>
</div>
@endif
@else
<div class="card">
    <form action="{{ route('studentprofile-store') }}" method="POST" class="mb-2">
        @method('POST')
        @csrf
        <div class="card-header">
            <h4>Profile</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama-lengkap" value="{{ auth()->user()->name }}" readonly disabled>
            </div>
            <div class="form-group">
                <label for="npm" class="form-label">NIM/NPM</label>
                <input type="number" name="npm" class="form-control  @error('npm') is-invalid @enderror" id="npm"
                    placeholder="Masukkan NIM/NPM" value="{{ old('npm') }}">
                @error('npm')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan">
                    <option id="jurusan" value="">Pilih Jurusan</option>
                <optgroup label="Magister Terapan">
                    <option id="jurusan" value="Teknik Energi Terbarukan">Teknik Energi Terbarukan</option>
                    <option id="jurusan" value="Pemasaran, Inovasi dan Teknologi">Pemasaran, Inovasi dan Teknologi</option>
                </optgroup>
                <optgroup label="Diploma IV/Sarjana Terapan">
                    <option id="jurusan" value="Perancangan Jalan dan Jembatan (Kampus Palembang dan PSDKU OKU)">Perancangan Jalan dan Jembatan (Kampus Palembang dan PSDKU OKU)</option>
                    <option id="jurusan" value="Teknik Mesin Produksi dan Perawatan (Kampus Palembang dan PSDKU SIAK RIAU)">Teknik Mesin Produksi dan Perawatan (Kampus Palembang dan PSDKU SIAK RIAU)</option>
                    <option id="jurusan" value="Teknik Energi">Teknik Energi</option>
                    <option id="jurusan" value="Teknologi Kimia Industri">Teknologi Kimia Industri</option>
                    <option id="jurusan" value="Akuntansi Sektor Publik (Kampus Palembang, PSDKU OKU dan PSDKU Siak RIAU)">Akuntansi Sektor Publik (Kampus Palembang, PSDKU OKU dan PSDKU Siak RIAU)</option>
                    <option id="jurusan" value="Teknik Elektro (Konsentrasi Mekatronika)">Teknik Elektro (Konsentrasi Mekatronika)</option>
                    <option id="jurusan" value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
                    <option id="jurusan" value="Usaha Perjalanan Wisata">Usaha Perjalanan Wisata</option>
                    <option id="jurusan" value="Manajemen Bisnis">Manajemen Bisnis</option>
                    <option id="jurusan" value="Teknologi Informatika Multimedia Digital">Teknologi Informatika Multimedia Digital</option>
                    <option id="jurusan" value="Teknologi Produksi Tanaman Perkebunan (Kampus Banyuasin)">Teknologi Produksi Tanaman Perkebunan (Kampus Banyuasin)</option>
                </optgroup>
                <optgroup label="Diploma III" id="w">
                    <option id="jurusan" value="Teknik Sipil">Teknik Sipil</option>
                    <option id="jurusan" value="Teknik Mesin">Teknik Mesin</option>
                    <option id="jurusan" value="Teknik Listrik">Teknik Listrik</option>
                    <option id="jurusan" value="Teknik Elektronika">Teknik Elektronika</option>
                    <option id="jurusan" value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
                    <option id="jurusan" value="Teknik Kimia (Kampus Palembang dan PSDKU SIAK RIAU)">Teknik Kimia (Kampus Palembang dan PSDKU SIAK RIAU)</option>
                    <option id="jurusan" value="Akuntansi">Akuntansi</option>
                    <option id="jurusan" value="Administrasi Bisnis (Kampus Palembang dan PSDKU OKU)">Administrasi Bisnis (Kampus Palembang dan PSDKU OKU)</option>
                    <option id="jurusan" value="Teknik Komputer">Teknik Komputer</option>
                    <option id="jurusan" value="Manajemen Informatika Program">Manajemen Informatika Program</option>
                    <option id="jurusan" value="Teknologi Pangan (Kampus Banyuasin)">Teknologi Pangan (Kampus Banyuasin)</option>
                <optgroup label="Diploma II">
                    <option id="jurusan" value="Diploma II (Program Studi di Luar Domisili/PDD) Akuntansi">Diploma II (Program Studi di Luar Domisili/PDD) Akuntansi</option>
                    <option id="jurusan" value="Adminisrasi Bisnis Program Studi Administrasi Bisnis (Kota Prabumulih)">Adminisrasi Bisnis Program Studi Administrasi Bisnis (Kota Prabumulih)</option>
                    <option id="jurusan" value="Teknik Komputer Program Studi Teknik Komputer (Kota Prabumulih)">Teknik Komputer Program Studi Teknik Komputer (Kota Prabumulih)</option>
                    <option id="jurusan" value="Manajemen Informatika Program Studi Manajemen Informatika (Kota Pangkalpinang)">Manajemen Informatika Program Studi Manajemen Informatika (Kota Pangkalpinang)</option>
                </optgroup>
                <optgroup label="Diploma I">
                    <option id="jurusan" value="Diploma I (Program Studi di Luar Domisili/PDD) Manajemen Informatika">Diploma I (Program Studi di Luar Domisili/PDD) Manajemen Informatika (Kota Pagaralam)</option>
                </optgroup>
                </select>
                @error('jurusan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="prodi" class="form-label">Program Studi</label>
                <select name="prodi" class="form-control @error('prodi') is-invalid @enderror" id="prodi">
                    <option value="">Pilih Program Studi</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                </select>
                @error('prodi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jalur_masuk" class="form-label">Jalur Masuk</label>
                <select name="jalur_masuk" class="form-control @error('jalur_masuk') is-invalid @enderror" id="jalur_masuk">
                    <option value="">Pilih Jalur Masuk</option>
                    <option value="SMM">Jalur Seleksi Masuk Mandiri (SMM)</option>
                    <option value="UMPN">Jalur Ujian Masuk Politeknik Negeri (UMPN)</option>
                    <option value="PMDK-PN">Jalur Penelusuran Minat dan Kemampuan-Politeknik Negeri (PMDK-PN)</option>
                    <option value="Bidikmisi">Jalur Beasiswa Bidikmisi</option>
                    <option value="PDD">Jalur Program Studi Di Luar Domisili (PDD)</option>
                    <option value="Alih Jenjang">Jalur Alih Jenjang (Sarjana Terapan)</option>
                    <option value="S2 Terapan">Jalur Magister Terapan (S2 Terapan)</option>
                </select>
                @error('jalur_masuk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="beasiswa" class="form-label">Apakah Anda Mendapatkan Beasiswa</label>
                <select name="beasiswa" class="form-control @error('beasiswa') is-invalid @enderror" id="beasiswa">
                    <option value="">Pilih Apakah Anda Mendapatkan Beasiswa</option>
                    <option value="Tidak">Tidak</option>
                    <option value="Ya">Ya</option>
                </select>
                @error('beasiswa')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="pendapatan" class="form-label">Pendapatan Orang Tua Perbulan</label>
                <select name="pendapatan" class="form-control @error('pendapatan') is-invalid @enderror" id="pendapatan">
                    <option value="">Pilih Pendapatan Orang Tua</option>
                    <option value="0 - 1.000.000">0 - 1.000.000</option>
                    <option value="1.000.001 - 2.500.000">1.000.001 - 2.500.000</option>
                    <option value="2.500.001 - 5.000.000">2.500.001 - 5.000.000</option>
                    <option value="> 5.000.001"> > 5.000.001</option>
                </select>
                @error('pendapatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="saku" class="form-label">Uang Saku Perbulan</label>
                <select name="saku" class="form-control @error('saku') is-invalid @enderror" id="saku">
                    <option value="">Pilih Uang Saku Perbulan</option>
                    <option value="0 - 1.000.000">0 - 1.000.000</option>
                    <option value="1.000.001 - 2.500.000">1.000.001 - 2.500.000</option>
                    <option value="2.500.001 - 5.000.000">2.500.001 - 5.000.000</option>
                    <option value="> 5.000.001"> > 5.000.001</option>
                </select>
                @error('saku')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ip" class="form-label">Indeks Prestasi (IP)</label>
                <input type="text" name="ip" class="form-control @error('ip') is-invalid @enderror" id="ip" placeholder="Masukkan Indeks Prestasi Saat Ini" value="{{ old('ip') }}">
                @error('ip')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ipk" class="form-label">Indeks Prestasi Kumulatif (IPK)</label>
                <input type="text" name="ipk" class="form-control @error('ipk') is-invalid @enderror" id="ipk" placeholder="Masukkan Indeks Prestasi Kumulatif Saat Ini" value="{{ old('ipk') }}">
                @error('ipk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="card-footer text-right">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary" id="btn2">Submit</button>
        </div>
    </form>
</div>
@endif
@endsection

@push('scripts')
<script>
$('#btn2').click(function(){
    swal.fire({
    title: 'Yakin ingin submit?',
    text: "Data tidak dapat dirubah setelah anda menekan tombol submit.",
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, submit.'
    })
    .then((res) => {
    if (res.dismiss!="cancel") {
        $("<input/>").attr("type", "hidden")
            .attr("name", "status")
            .attr("value", "allow")
            .appendTo("form");
        $('form').submit();
    }
    });
});
</script>
@endpush()