@extends('layouts.app')

@section('title', 'Interview')
@section('desc', ' Wawancara. ')

@section('content')
@if($cek)
    <div class="card">
        <div class="card-header">
            <h4>Interview</h4>
            @if($item2)
            <div class="card-header-action">
                <h4 class="text-success">Finish <i class="fas fa-check"></i></h4>
            </div>
            @endif
        </div>
        <div class="card-body">
            @if(!$item2)
            <form action="{{ route('interview/store') }}" method="POST" class="mb-2">
                @method('POST')
                @csrf
                <label for="datepicker" class="form-label">Choose Your Date</label>
                <div class="d-flex">
                    <input type="date" name="tanggal" class="form-control mr-2" id="datepicker" value="{{ old('tanggal') }}">
                    <button type="button" class="btn btn-primary" id="btn">Submit</button>
                </div>
            </form>
            @endif
            @if($item)
            <label class="form-label">Used Date</label>
            <div class="row">
                @foreach($item as $it)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card bg-light rounded-3">
                        <div class="card-body py-2 px-3">
                            {{ $it->tanggal_wawancara.' ('.$it->user->name.')' }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
    @endif
@endsection

@push('scripts')
<script>
    $('#btn').click(function(){
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
        $('form').submit();
    }
    });
    });
</script>
@endpush()