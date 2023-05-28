@extends('layouts.app')

@section('title', 'Edit Activity Report')
@section('desc', ' Ubah Aktivitas Laporan. ')

@section('content')
<div class="card">
    <form action="{{ route('activityreport-validator/update',$item->id) }}" method="POST" class="needs-validation" autocomplete="off" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="card-header">
            <h4>Activy Report Form</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label class="form-label" for="status">Status</label>
                <select name="status" class="form-control  @error('status') is-invalid @enderror" id="status">
                    <option value="">Pilih Status</option>
                    <option value="validasi"{{ $item->status=="Validasi"?'selected':''}}>Validasi</option>
                    <option value="belum divalidasi"{{ $item->status=="Belum Divalidasi"?'selected':''}}>Belum Divalidasi</option>
                </select>
                @error('status')
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