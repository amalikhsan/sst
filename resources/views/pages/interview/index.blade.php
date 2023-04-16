@extends('layouts.app')

@section('title', 'Interview')
@section('desc', ' Wawancara. ')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Interview</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('interview-store') }}" method="POST" class="mb-2">
                @method('POST')
                @csrf
                <label for="date">Choose Your Date</label>
                <div class="d-flex">
                    <input type="date" class="form-control mr-2" id="date">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
            <label>Used Date</label>
            <input type="text" class="form-control mb-2" readonly disabled value="07/19/2023">
            <input type="text" class="form-control mb-2" readonly disabled value="07/12/2023">
            <input type="text" class="form-control mb-2" readonly disabled value="07/08/2023">
        </div>
    </div>
@endsection
