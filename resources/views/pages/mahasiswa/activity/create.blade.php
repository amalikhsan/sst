@extends('layouts.app')

@section('title', 'Create New Activity Report')
@section('desc', ' Buat Aktivitas Laporan Baru. ')

@section('content')
<div class="card">
    <form action="{{ route('activityreport-store') }}" method="POST" class="needs-validation" autocomplete="off" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="card-header">
            <h4>Activy Report Form</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label class="form-label" for="semester">Semester (Saat Ikut Kegiatan)</label>
                <select name="semester" class="form-control  @error('semester') is-invalid @enderror" id="semester">
                    <option value="">Pilih Semester</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                @error('semester')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="bidang">Bidang Kegiatan</label>
                <select name="bidang" class="form-control  @error('bidang') is-invalid @enderror" id="bidang">
                    <option value="">Pilih Bidang</option>
                    <option value="Kompetisi">Kompetisi</option>
                    <option value="Rekognisi">Rekognisi</option>
                    <option value="Penghargaan">Penghargaan</option>
                    <option value="Organisasi">Organisasi</option>
                    <option value="Hasil Karya">Hasil Karya</option>
                    <option value="Pengabdian kepada Masyarakat dan Pemberdayaan atau Aksi Kemanusiaan">Pengabdian kepada Masyarakat dan Pemberdayaan atau Aksi Kemanusiaan</option>
                    <option value="Kewirausahaan">Kewirausahaan</option>
                </select>
                @error('bidang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="capaian">Capaian Kegiatan</label>
                <select name="capaian" class="form-control  @error('capaian') is-invalid @enderror" id="capaian">
                    <option value="">Pilih Capaian Kegiatan</option>

                    <option class="d-none" value="Juara 1 Perorangan" id="satu">Juara 1 Perorangan</option>
                    <option class="d-none" value="Juara 2 Perorangan" id="satu">Juara 2 Perorangan</option>
                    <option class="d-none" value="Juara 3 Perorangan" id="satu">Juara 3 Perorangan</option>

                    <option class="d-none" value="Harapan 1 Perorangan" id="satu">Harapan 1 Perorangan</option>
                    <option class="d-none" value="Harapan 2 Perorangan" id="satu">Harapan 2 Perorangan</option>
                    <option class="d-none" value="Harapan 3 Perorangan" id="satu">Harapan 3 Perorangan</option>

                    <option class="d-none" value="Peserta terfavorit Perorangan" id="satu">Peserta terfavorit Perorangan</option>

                    <option class="d-none" value="Peserta Perorangan (non pemenang)" id="satu">Peserta Perorangan (non pemenang)</option>

                    <option class="d-none" value="Juara 1 Beregu" id="satu">Juara 1 Beregu</option>
                    <option class="d-none" value="Juara 2 Beregu" id="satu">Juara 2 Beregu</option>
                    <option class="d-none" value="Juara 3 Beregu" id="satu">Juara 3 Beregu</option>

                    <option class="d-none" value="Harapan 1 Beregu" id="satu">Harapan 1 Beregu</option>
                    <option class="d-none" value="Harapan 2 Beregu" id="satu">Harapan 2 Beregu</option>
                    <option class="d-none" value="Harapan 3 Beregu" id="satu">Harapan 3 Beregu</option>

                    <option class="d-none" value="Peserta terfavorit Beregu" id="satu">Peserta terfavorit Beregu</option>

                    <option class="d-none" value="Peserta Beregu (non pemenang)" id="satu">Peserta Beregu (non pemenang)</option>

                    <option class="d-none" value="Juri" id="dua">Juri</option>

                    <option class="d-none" value="Pelatih" id="dua">Pelatih</option>
                    <option class="d-none" value="Wasit" id="dua">Wasit</option>
                    <option class="d-none" value="Nara sumber" id="dua">Nara sumber</option>
                    <option class="d-none" value="Pembicara" id="dua">Pembicara</option>
                    <option class="d-none" value="Moderator" id="dua">Moderator</option>

                    <option class="d-none" value="Diksarlin" id="dua">Diksarlin</option>
                    <option class="d-none" value="Seminar" id="dua">Seminar</option>
                    <option class="d-none" value="Webinar" id="dua">Webinar</option>
                    <option class="d-none" value="Workshop" id="dua">Workshop</option>

                    <option class="d-none" value="Medali Emas Perorangan" id="tiga">Medali Emas Perorangan</option>
                    <option class="d-none" value="Medali Perak Perorangan" id="tiga">Medali Perak Perorangan</option>
                    <option class="d-none" value="Medali Perunggu Perorangan" id="tiga">Medali Perunggu Perorangan</option>
                    <option class="d-none" value="Medali Emas Beregu" id="tiga">Medali Emas Beregu</option>
                    <option class="d-none" value="Medali Perak Beregu" id="tiga">Medali Perak Beregu</option>
                    <option class="d-none" value="Medali Perunggu Beregu" id="tiga">Medali Perunggu Beregu</option>

                    <option class="d-none" value="Ketua" id="empat">Ketua</option>
                    <option class="d-none" value="Wakil Ketua" id="empat">Wakil Ketua</option>
                    <option class="d-none" value="Sekretaris" id="empat">Sekretaris</option>
                    <option class="d-none" value="Bendahara" id="empat">Bendahara</option>
                    <option class="d-none" value="Anggota" id="empat">Anggota</option>

                    <option class="d-none" value="Paten" id="lima">Paten</option>
                    <option class="d-none" value="Merek yang HaKi kan" id="lima">Merek yang HaKi kan</option>

                    <option class="d-none" value="Cipta Karya Original" id="lima">Cipta Karya Original</option>

                    <option class="d-none" value="Buku ber-ISBN"  id="lima">Buku ber-ISBN</option>

                    <option class="d-none" value="Penulis Utama/korespondensi karya ilmiah di journal yg bereputasi dan diakui" id="lima">Penulis Utama/korespondensi karya ilmiah di journal yg bereputasi dan diakui</option>
                    <option class="d-none" value="Penulis kedua (bukan korespondensi) dst karya ilmiah di journal yg bereputasi dan diakui" id="lima">Penulis kedua (bukan korespondensi) dst karya ilmiah di journal yg bereputasi dan diakui</option>

                    <option class="d-none" value="Pemrakarsa aksi kemanusiaan" id="enam">Pemrakarsa aksi kemanusiaan</option>
                    <option class="d-none" value="Koordinator aksi kemanusiaan" id="enam">Koordinator aksi kemanusiaan</option>
                    <option class="d-none" value="Relawan" id="enam">Relawan</option>

                    <option class="d-none" value="Memiliki Usaha ber NIB" id="tujuh">Memiliki Usaha ber NIB</option>
                    <option class="d-none" value="Memiliki Usaha tanpa NIB" id="tujuh">Memiliki Usaha tanpa NIB</option>
                </select>
                @error('capaian')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="lingkup">Lingkup Kegiatan</label>
                <select name="lingkup" class="form-control  @error('lingkup') is-invalid @enderror">
                    <option value="">Pilih Lingkup</option>
                    <option class="d-none" value="Internal" id="lingkupan">Internal</option>
                    <option class="d-none" value="Nasional" id="lingkupan">Nasional</option>
                    <option class="d-none" value="Regional" id="lingkupan">Regional</option>
                    <option class="d-none" value="Internasional" id="lingkupan">Internasional</option>
                </select>
                @error('lingkup')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="peserta">Jumlah Peserta Kegiatan</label>
                <input type="number" id="peserta" name="peserta" class="form-control @error('peserta') is-invalid @enderror"  value="{{ old('peserta') }}" placeholder="Masukkan Jumlah Peserta">
                @error('peserta')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="kegiatan">Nama Kegiatan</label>
                <input type="text" id="kegiatan" name="kegiatan" class="form-control @error('kegiatan') is-invalid @enderror" value="{{ old('kegiatan') }}" placeholder="Masukkan Nama Kegiatan">
                @error('kegiatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="file-bukti">Unggah Bukti Kegiatan (Sertifikat/Surat Tugas/Foto/Sk dll) [.pdf]</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input @error('file-bukti') is-invalid @enderror" name="file-bukti" id="file-bukti">
                    <label class="custom-file-label" for="file-bukti">Choose file</label>
                </div>
                @error('file-bukti')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="link">Link Kegiatan</label>
                <input type="text" id="link" name="link" class="form-control @error('link') is-invalid @enderror" value="{{ old('link') }}" placeholder="Masukkan Link Kegiatan">
                @error('link')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="tglkegiatan">Tanggal Kegiatan</label>
                <input type="date" id="tglkegiatan" name="tglkegiatan" class="form-control @error('tglkegiatan') is-invalid @enderror" value="{{ old('tglkegiatan') }}">
                @error('tglkegiatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="card-footer text-right">
            <button type="reset" class="btn btn-danger m-2">Reset</button>
            <button type="button" class="btn btn-primary" id="btn3">Submit</button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    $('#btn3').click(function(){
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
            .attr("value", "deny")
            .appendTo("form");
        $('form').submit();
    }
    });
    });

    $('#bidang').change(function(){
        // declare variables
        var val = $('#bidang').val();
        var satu = $('#satu*');
        var dua = $('#dua*');
        var tiga = $('#tiga*');
        var empat = $('#empat*');
        var lima = $('#lima*');
        var enam = $('#enam*');
        var tujuh = $('#tujuh*');

        //lingkupan
        var lingkupan = $('#lingkupan*');

        //check value
        if(val=="Kompetisi"){
            satu.removeClass('d-none');
            dua.addClass('d-none');
            tiga.addClass('d-none');
            empat.addClass('d-none');
            lima.addClass('d-none');
            enam.addClass('d-none');
            tujuh.addClass('d-none');
            lingkupan.removeClass('d-none');
        }else if(val=="Rekognisi"){
            satu.addClass('d-none');
            dua.removeClass('d-none');
            tiga.addClass('d-none');
            empat.addClass('d-none');
            lima.addClass('d-none');
            enam.addClass('d-none');
            tujuh.addClass('d-none');
            lingkupan.removeClass('d-none');
        }else if(val=="Penghargaan"){
            satu.addClass('d-none');
            dua.addClass('d-none');
            tiga.removeClass('d-none');
            empat.addClass('d-none');
            lima.addClass('d-none');
            enam.addClass('d-none');
            tujuh.addClass('d-none');
            lingkupan.removeClass('d-none');
        }else if(val=="Organisasi"){
            satu.addClass('d-none');
            dua.addClass('d-none');
            tiga.addClass('d-none');
            empat.removeClass('d-none');
            lima.addClass('d-none');
            enam.addClass('d-none');
            tujuh.addClass('d-none');
            lingkupan.removeClass('d-none');
        }else if(val=="Hasil Karya"){
            satu.addClass('d-none');
            dua.addClass('d-none');
            tiga.addClass('d-none');
            empat.addClass('d-none');
            lima.removeClass('d-none');
            enam.addClass('d-none');
            tujuh.addClass('d-none');
            lingkupan.removeClass('d-none');
        }else if(val=="Pengabdian kepada Masyarakat dan Pemberdayaan atau Aksi Kemanusiaan"){
            satu.addClass('d-none');
            dua.addClass('d-none');
            tiga.addClass('d-none');
            empat.addClass('d-none');
            lima.addClass('d-none');
            enam.removeClass('d-none');
            tujuh.addClass('d-none');
            lingkupan.removeClass('d-none');
        }else if(val=="Kewirausahaan"){
            satu.addClass('d-none');
            dua.addClass('d-none');
            tiga.addClass('d-none');
            empat.addClass('d-none');
            lima.addClass('d-none');
            enam.addClass('d-none');
            tujuh.removeClass('d-none');
            lingkupan.removeClass('d-none');
        }else{
            satu.addClass('d-none');
            dua.addClass('d-none');
            tiga.addClass('d-none');
            empat.addClass('d-none');
            lima.addClass('d-none');
            enam.addClass('d-none');
            tujuh.addClass('d-none');
            lingkupan.addClass('d-none');
        }
    });
</script>
@endpush()