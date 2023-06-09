@extends('layouts.app')

@section('title', 'Self Assesment')
@section('desc', ' Penilaian Mandiri. ')

@section('content')
@if(!$item)
<div class="card">
    <form action="{{ route('selfassessment/store') }}" method="POST" class="needs-validation" autocomplete="off">
        @method('POST')
        @csrf
        <div class="card-header">
            <h4>Self Assesment 1</h4>
            <div class="card-header-action">
                <button type="button" class="btn btn-primary" id="btn">
                    <i class="fa fa-play mr-1"></i>
                    Start Self Assessment 1
                </button>
            </div>
        </div>
        <div class="card-body d-none" id="item">
            <div class="table-responsive">
                <table class="table table-striped w-100" id="datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Item</th>
                            <th>Ya</th>
                            <th>Tidak</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="card-footer text-right d-none" id="item">
            <button type="button" class="btn btn-primary" id="btns">Submit</button>
        </div>
    </form>
</div>
@else
<div class="card">
    <div class="card-header">
        <h4>Self Assesment</h4>
        <div class="card-header-action">
            <h4 class="text-success">Finish <i class="fas fa-check"></i></h4>
        </div>
    </div>
</div>
@endif
@endsection

@push('scripts')
@if(!$item)
<script>
    $('#btn').click(function(){
        swal.fire({
        title: 'Yakin ingin mulai?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, mulai.'
        })
        .then((res) => {
        if (res.dismiss!="cancel") {
            selfAssessment();
            localStorage.setItem('sa','use');
        }
        });
    });

    $('#btns').click(function(){
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
        for(var i=0;i<=100;i++){
            localStorage.setItem(`pilih${i}`,'');
        }
        $('form').submit();
    }
    });
    });

    function selfAssessment() {
        $('#btn').addClass('d-none');
        $('#item*').removeClass('d-none');
    }

    if(localStorage.getItem('sa')=="use"){
        selfAssessment();
    }

    $(function() {
        var datatable = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: "{!! url()->current() !!}"
            },
            lengthMenu: [
                [-1],
                ['ALL']
            ],
            responsive: true,
            order: [
                [0, 'asc'],
            ],
            columns: [
                {data: 'id', name: 'id'},
                {data: 'item', name: 'item'},
                {data: 'ya', name: 'ya'},
                {data: 'tidak', name: 'tidak'}
            ],
            columnDefs: [{
                "targets": -2,
                "render": function(data, type, row, meta) {
                    if(row.kode!="KK3R"){
                        if(localStorage.getItem("pilih"+row.id)=="1"){
                            return `<label class="items"><input class="option-input radio" type="radio" name="pilih${row.id}" onclick="return localStorage.setItem('pilih${row.id}','1')" checked value="1">
                            Ya</label>`;
                        }else{
                            return `<label class="items"><input class="option-input radio" type="radio" name="pilih${row.id}" onclick="return localStorage.setItem('pilih${row.id}','1')" value="1">
                            Ya</label>`;
                        }
                    }else{
                        if(localStorage.getItem("pilih"+row.id)=="0"){
                            return `<label class="items"><input class="option-input radio" type="radio" name="pilih${row.id}" onclick="return localStorage.setItem('pilih${row.id}','0')" checked value="0">
                            Ya</label>`;
                        }else{
                            return `<label class="items"><input class="option-input radio" type="radio" name="pilih${row.id}" onclick="return localStorage.setItem('pilih${row.id}','0')" value="0">
                            Ya</label>`;
                        }
                    }
                }
            },{
                "targets": -1,
                "render": function(data, type, row, meta) {
                    if(row.kode!="KK3R"){
                        if(localStorage.getItem("pilih"+row.id)=="0"){
                            return `<label class="items"><input class="option-input radio" type="radio" name="pilih${row.id}" onclick="return localStorage.setItem('pilih${row.id}','0')" checked value="0">
                            Tidak</label>`;
                        }else{
                            return `<label class="items"><input class="option-input radio" type="radio" name="pilih${row.id}" onclick="return localStorage.setItem('pilih${row.id}','0')" value="0">
                            Tidak</label>`;
                        }
                    }else{
                        if(localStorage.getItem("pilih"+row.id)=="1"){
                            return `<label class="items"><input class="option-input radio" type="radio" name="pilih${row.id}" onclick="return localStorage.setItem('pilih${row.id}','1')" checked value="1">
                            Tidak</label>`;
                        }else{
                            return `<label class="items"><input class="option-input radio" type="radio" name="pilih${row.id}" onclick="return localStorage.setItem('pilih${row.id}','1')" value="1">
                            Tidak</label>`;
                        }
                    }
                }
            }],
            rowId: function(a) {
                return a;
            },
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            },
        });
    });
</script>
@endif
@endpush()
