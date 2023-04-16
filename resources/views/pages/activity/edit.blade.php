@extends('layouts.app')

@section('title', 'Edit Activity Report')
@section('desc', ' Ubah Aktivitas Laporan. ')

@section('content')
<div class="card">
    <form action="{{ route('activityreport-update',$item->id) }}" method="POST" class="needs-validation" autocomplete="off" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="card-header">
            <h4>Activy Report Form</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="bidang">Bidang Kegiatan</label>
                <select name="bidang" class="form-control  @error('bidang') is-invalid @enderror" id="bidang">
                    <option value="">Pilih bidang</option>
                    <option value="Kompetisi"{{ $item->bidang=="Kompetisi"?'selected':''}}>Kompetisi</option>
                    <option value="Rekognisi" {{ $item->bidang=="Rekognisi"?'selected':'' }}>Rekognisi</option>
                    <option value="Penghargaan" {{ $item->bidang=="Penghargaan"?'selected':'' }}>Penghargaan</option>
                    <option value="Organisasi" {{ $item->bidang=="Organisasi"?'selected':'' }}>Organisasi</option>
                    <option value="Hasil Karya" {{ $item->bidang=="Hasil Karya"?'selected':'' }}>Hasil Karya</option>
                    <option value="Pengabdian kepada Masyarakat dan Pemberdayaan atau Aksi Kemanusiaan" {{ $item->bidang=="Pengabdian kepada Masyarakat dan Pemberdayaan atau Aksi Kemanusiaan"?'selected':'' }}>Pengabdian kepada Masyarakat dan Pemberdayaan atau Aksi Kemanusiaan</option>
                    <option value="Kewirausahaan" {{ $item->bidang=="Kewirausahaan"?'selected':'' }}>Kewirausahaan</option>
                </select>
                @error('bidang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="capaian">Capaian Kegiatan</label>
                <select name="capaian" class="form-control  @error('capaian') is-invalid @enderror" id="capaian">
                    <option value="">Pilih capaian</option>

                    <option class="d-none" value="Juara 1 Perorangan"{{ $item->capaian=="Juara 1 Perorangan"?'selected':'' }} id="satu">Juara 1 Perorangan</option>
                    <option class="d-none" value="Juara 2 Perorangan"{{ $item->capaian=="Juara 2 Perorangan"?'selected':'' }} id="satu">Juara 2 Perorangan</option>
                    <option class="d-none" value="Juara 3 Perorangan"{{ $item->capaian=="Juara 3 Perorangan"?'selected':'' }} id="satu">Juara 3 Perorangan</option>

                    <option class="d-none" value="Harapan 1 Perorangan"{{ $item->capaian=="Harapan 1 Perorangan"?'selected':'' }} id="satu">Harapan 1 Perorangan</option>
                    <option class="d-none" value="Harapan 2 Perorangan"{{ $item->capaian=="Harapan 2 Perorangan"?'selected':'' }} id="satu">Harapan 2 Perorangan</option>
                    <option class="d-none" value="Harapan 3 Perorangan"{{ $item->capaian=="Harapan 3 Perorangan"?'selected':'' }} id="satu">Harapan 3 Perorangan</option>

                    <option class="d-none" value="Peserta terfavorit Perorangan"{{ $item->capaian=="Peserta terfavorit Perorangan"?'selected':'' }} id="satu">Peserta terfavorit Perorangan</option>

                    <option class="d-none" value="Peserta Perorangan (non pemenang)"{{ $item->capaian=="Peserta Perorangan (non pemenang)"?'selected':'' }} id="satu">Peserta Perorangan (non pemenang)</option>

                    <option class="d-none" value="Juara 1 Beregu"{{ $item->capaian=="Juara 1 Beregu"?'selected':'' }} id="satu">Juara 1 Beregu</option>
                    <option class="d-none" value="Juara 2 Beregu"{{ $item->capaian=="Juara 2 Beregu"?'selected':'' }} id="satu">Juara 2 Beregu</option>
                    <option class="d-none" value="Juara 3 Beregu"{{ $item->capaian=="Juara 3 Beregu"?'selected':'' }} id="satu">Juara 3 Beregu</option>

                    <option class="d-none" value="Harapan 1 Beregu"{{ $item->capaian=="Harapan 1 Beregu"?'selected':'' }} id="satu">Harapan 1 Beregu</option>
                    <option class="d-none" value="Harapan 2 Beregu"{{ $item->capaian=="Harapan 2 Beregu"?'selected':'' }} id="satu">Harapan 2 Beregu</option>
                    <option class="d-none" value="Harapan 3 Beregu"{{ $item->capaian=="Harapan 3 Beregu"?'selected':'' }} id="satu">Harapan 3 Beregu</option>

                    <option class="d-none" value="Peserta terfavorit Beregu"{{ $item->capaian=="Peserta terfavorit Beregu"?'selected':'' }} id="satu">Peserta terfavorit Beregu</option>

                    <option class="d-none" value="Peserta Beregu (non pemenang)"{{ $item->capaian=="Peserta Beregu (non pemenang)"?'selected':'' }} id="satu">Peserta Beregu (non pemenang)</option>

                    <option class="d-none" value="Juri"{{ $item->capaian=="Juri"?'selected':'' }} id="dua">Juri</option>

                    <option class="d-none" value="Pelatih"{{ $item->capaian=="Pelatih"?'selected':'' }} id="dua">Pelatih</option>
                    <option class="d-none" value="Wasit"{{ $item->capaian=="Wasit"?'selected':'' }} id="dua">Wasit</option>
                    <option class="d-none" value="Nara sumber" {{ $item->capaian=="Nara sumber"?'selected':'' }} id="dua">Nara sumber</option>
                    <option class="d-none" value="Pembicara" {{ $item->capaian=="Pembicara"?'selected':'' }} id="dua">Pembicara</option>
                    <option class="d-none" value="Moderator" {{ $item->capaian=="Moderator"?'selected':'' }} id="dua">Moderator</option>

                    <option class="d-none" value="Diksarlin" {{ $item->capaian=="Diksarlin"?'selected':'' }} id="dua">Diksarlin</option>
                    <option class="d-none" value="Seminar" {{ $item->capaian=="Seminar"?'selected':'' }} id="dua">Seminar</option>
                    <option class="d-none" value="Webinar" {{ $item->capaian=="Webinar"?'selected':'' }} id="dua">Webinar</option>
                    <option class="d-none" value="Workshop" {{ $item->capaian=="Workshop"?'selected':'' }} id="dua">Workshop</option>

                    <option class="d-none" value="Medali Emas Perorangan" {{ $item->capaian=="Medali Emas Perorangan"?'selected':'' }} id="tiga">Medali Emas Perorangan</option>
                    <option class="d-none" value="Medali Perak Perorangan" {{ $item->capaian=="Medali Perak Perorangan"?'selected':'' }} id="tiga">Medali Perak Perorangan</option>
                    <option class="d-none" value="Medali Perunggu Perorangan" {{ $item->capaian=="Medali Perunggu Perorangan"?'selected':'' }} id="tiga">Medali Perunggu Perorangan</option>
                    <option class="d-none" value="Medali Emas Beregu" {{ $item->capaian=="Medali Emas Beregu"?'selected':'' }} id="tiga">Medali Emas Beregu</option>
                    <option class="d-none" value="Medali Perak Beregu" {{ $item->capaian=="Medali Perak Beregu"?'selected':'' }} id="tiga">Medali Perak Beregu</option>
                    <option class="d-none" value="Medali Perunggu Beregu" {{ $item->capaian=="Medali Perunggu Beregu"?'selected':'' }} id="tiga">Medali Perunggu Beregu</option>

                    <option class="d-none" value="Ketua" {{ $item->capaian=="Ketua"?'selected':'' }} id="empat">Ketua</option>
                    <option class="d-none" value="Wakil Ketua" {{ $item->capaian=="Wakil Ketua"?'selected':'' }} id="empat">Wakil Ketua</option>
                    <option class="d-none" value="Sekretaris" {{ $item->capaian=="Sekretaris"?'selected':'' }} id="empat">Sekretaris</option>
                    <option class="d-none" value="Bendahara" {{ $item->capaian=="Bendahara"?'selected':'' }} id="empat">Bendahara</option>
                    <option class="d-none" value="Anggota" {{ $item->capaian=="Anggota"?'selected':'' }} id="empat">Anggota</option>

                    <option class="d-none" value="Paten" {{ $item->capaian=="Paten"?'selected':'' }} id="lima">Paten</option>
                    <option class="d-none" value="Merek yang HaKi kan" {{ $item->capaian=="Merek yang HaKi kan"?'selected':'' }} id="lima">Merek yang HaKi kan</option>

                    <option class="d-none" value="Cipta Karya Original" {{ $item->capaian=="Cipta Karya Original"?'selected':'' }} id="lima">Cipta Karya Original</option>

                    <option class="d-none" value="Buku ber-ISBN" {{ $item->capaian=="Buku ber-ISBN"?'selected':'' }} id="lima">Buku ber-ISBN</option>

                    <option class="d-none" value="Penulis Utama/korespondensi karya ilmiah di journal yg bereputasi dan diakui" {{ $item->capaian=="Penulis Utama/korespondensi karya ilmiah di journal yg bereputasi dan diakui"?'selected':'' }} id="lima">Penulis Utama/korespondensi karya ilmiah di journal yg bereputasi dan diakui</option>
                    <option class="d-none" value="Penulis kedua (bukan korespondensi) dst karya ilmiah di journal yg bereputasi dan diakui" {{ $item->capaian=="Penulis kedua (bukan korespondensi) dst karya ilmiah di journal yg bereputasi dan diakui"?'selected':'' }} id="lima">Penulis kedua (bukan korespondensi) dst karya ilmiah di journal yg bereputasi dan diakui</option>

                    <option class="d-none" value="Pemrakarsa aksi kemanusiaan" {{ $item->capaian=="Pemrakarsa aksi kemanusiaan"?'selected':'' }} id="enam">Pemrakarsa aksi kemanusiaan</option>
                    <option class="d-none" value="Koordinator aksi kemanusiaan" {{ $item->capaian=="Koordinator aksi kemanusiaan"?'selected':'' }} id="enam">Koordinator aksi kemanusiaan</option>
                    
                    <option class="d-none" value="Relawan" {{ $item->capaian=="Relawan"?'selected':'' }} id="enam">Relawan</option>

                    <option class="d-none" value="Memiliki Usaha ber NIB" {{ $item->capaian=="Memiliki Usaha ber NIB"?'selected':'' }} id="tujuh">Memiliki Usaha ber NIB</option>
                    <option class="d-none" value="Memiliki Usaha tanpa NIB" {{ $item->capaian=="Memiliki Usaha tanpa NIB"?'selected':'' }} id="tujuh">Memiliki Usaha tanpa NIB</option>
                </select>
                @error('capaian')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="lingkup">Lingkup Kegiatan</label>
                <select name="lingkup" class="form-control  @error('lingkup') is-invalid @enderror" id="lingkup">
                    <option value="">Pilih lingkup</option>
                    <option class="d-none" value="Internal" {{ $item->lingkup=="Internal"?'selected':'' }} id="lingkupan">Internal</option>
                    <option class="d-none" value="Nasional" {{ $item->lingkup=="Nasional"?'selected':'' }} id="lingkupan">Nasional</option>
                    <option class="d-none" value="Regional" {{ $item->lingkup=="Regional"?'selected':'' }} id="lingkupan">Regional</option>
                    <option class="d-none" value="Internasional" {{ $item->lingkup=="Internasional"?'selected':'' }} id="lingkupan">Internasional</option>
                </select>
                @error('lingkup')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="peserta">Jumlah Peserta Kegiatan</label>
                <input type="number" id="peserta" name="peserta" class="form-control @error('peserta') is-invalid @enderror" value="{{ old('peserta',$item->jumlah_peserta) }}">
                @error('peserta')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="kegiatan">Nama Kegiatan</label>
                <input type="text" id="kegiatan" name="kegiatan" class="form-control @error('kegiatan') is-invalid @enderror" value="{{ old('kegiatan',$item->nama_kegiatan) }}">
                @error('kegiatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="file-bukti">Unggah Bukti Kegiatan (Sertifikat/Surat Tugas/Foto/Sk dll) [.pdf]</label>
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
                <label for="tglkegiatan">Tanggal Kegiatan</label>
                <input type="date" id="tglkegiatan" name="tglkegiatan" class="form-control @error('tglkegiatan') is-invalid @enderror" value="{{ old('tglkegiatan',$item->tanggal_kegiatan) }}">
                @error('tglkegiatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="card-footer text-right">
            <button type="reset" class="btn btn-danger m-2">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
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
