@extends('layouts.app')

@section('title', 'Edit Interview Qouta')
@section('desc', ' Ubah Kuota Wawancara. ')

@section('content')
    <form action="{{ route('interviewquota/update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Interview Quota Form</h4>
                    </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="jumlahkuota" class="col-form-label">Jumlah Kuota Wawancara</label>
                                <input value="{{ old('jumlahkuota',$item->quota) }}" type="number" class="form-control @error('jumlahkuota') is-invalid @enderror" name="jumlahkuota" id="jumlahkuota" placeholder="Jumlah Kuota Wawancara">
                                @error('jumlahkuota')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                </div>
            </div>
        </div>
    </form>
@endsection
