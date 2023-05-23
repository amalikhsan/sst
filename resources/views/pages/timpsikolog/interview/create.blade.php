@extends('layouts.app')

@section('title', 'Create New Interview Score')
@section('desc', ' Buat skor interview Baru. ')

@section('content')
<div class="card">
    <form action="{{ route('interview-timpsikolog/store') }}" method="POST" class="needs-validation" autocomplete="off" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="card-header">
            <h4>Interview Form</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label class="form-label" for="user_id"></label>
                <select name="user_id" class="form-control  @error('user_id') is-invalid @enderror" id="user_id">
                    <option value="">Pilih mahasiswa</option>
                    @foreach($items as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                @error('user_id')
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
        }else if(val=="Rekognisi/ Pengakuan"){
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