@extends('layouts.app')

@section('title', 'Self Assessment 2')
@section('desc', ' Aktivitas Laporan 2. ')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Self Assessment 2 List</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped w-100 display" id="datatable" style="width:100%">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Nama</th>
                            <th colspan="6">Social Skill</th>
                            <th colspan="4">Kognitif</th>
                            <th colspan="7">Penguasaan Diri</th>
                            <th colspan="3">Sikap Kerja</th>
                            <th rowspan="2">Rata-Rata</th>
                        </tr>
                        <tr>
                            <th>Kemampuan Komunikasi</th>
                            <th>Kerja Sama</th>
                            <th>Komunikasi Kerja</th>
                            <th>Membangun Relasi</th>
                            <th>Pelayanan</th>
                            <th>Public Speaking</th>
                            <th>Berpikir Analitis (Analytical Thinking)</th>
                            <th>Berpikir Inovatif (Innovative Thinking)</th>
                            <th>Berpikir terstruktur (Structural Thinking)</th>
                            <th>Penyelesaian masalah (Problem Solving)</th>
                            <th>Adaptasi</th>
                            <th>Kepemimpinan (Leadership)</th>
                            <th>Manajemen konflik (Conflict Management)</th>
                            <th>Manajemen resiko (Risk Management)</th>
                            <th>Manajemen Waktu (Time Management)</th>
                            <th>Percaya Diri (Self-Confidence)</th>
                            <th>Resiliensi</th>
                            <th>Integritas</th>
                            <th>Komitmen (Commitment)</th>
                            <th>Tanggung jawab (Responsibility)</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(function() {
        var datatable = $('#datatable').DataTable({
            dom: 'Bfrtip',
            buttons:[
                {extend:'copy',className:"btn btn-primary"},
                {extend:'excel',className:"btn btn-primary"},
                {extend:'csv',className:"btn btn-primary"}
                ],
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: "{!! url()->current() !!}"
            },
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, 'ALL']
            ],
            responsive: true,
            order: [
                [0, 'desc'],
            ],
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
            {data:'kat1_var1',name:'kat1_var1'},
            {data:'kat1_var2',name:'kat1_var2'},
            {data:'kat1_var3',name:'kat1_var3'},
            {data:'kat1_var4',name:'kat1_var4'},
            {data:'kat1_var5',name:'kat1_var5'},
            {data:'kat1_var6',name:'kat1_var6'},
            {data:'kat2_var7',name:'kat2_var7'},
            {data:'kat2_var8',name:'kat2_var8'},
            {data:'kat2_var9',name:'kat2_var9'},
            {data:'kat2_var10',name:'kat2_var10'},
            {data:'kat3_var11',name:'kat3_var11'},
            {data:'kat3_var12',name:'kat3_var12'},
            {data:'kat3_var13',name:'kat3_var13'},
            {data:'kat3_var14',name:'kat3_var14'},
            {data:'kat3_var15',name:'kat3_var15'},
            {data:'kat3_var16',name:'kat3_var16'},
            {data:'kat3_var17',name:'kat3_var17'},
            {data:'kat4_var18',name:'kat4_var18'},
            {data:'kat4_var19',name:'kat4_var19'},
            {data:'kat4_var20',name:'kat4_var20'},
            {data:'rata_rata',name:'rata_rata'}
            ],
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
@endpush()
