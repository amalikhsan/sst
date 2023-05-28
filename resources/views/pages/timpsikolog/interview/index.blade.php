@extends('layouts.app')

@section('title', 'Interview')
@section('desc', ' Wawancara. ')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Interview List</h4>
            <div class="card-header-action">
                <a href="{{ route('interview-timpsikolog/create') }}" class="btn btn-primary">
                    <i class="fa fa-plus mr-1"></i>
                    Add New
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped w-100" id="datatable">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Nama</th>
                            <th>Kognitif</th>
                            <th>Social Skill</th>
                            <th>Kognitif</th>
                            <th>Sikap kerja</th>
                            <th>Sikap kerja</th>
                            <th>Penguasaan diri</th>
                            <th>Penguasaan diri</th>
                            <th>Social Skill</th>
                            <th>Social Skill</th>
                            <th>Sikap kerja</th>
                            <th>Social Skill</th>
                            <th>Social Skill</th>
                            <th>Kognitif</th>
                            <th>Kognitif</th>
                            <th>Penguasaan diri</th>
                            <th>Social Skill</th>
                            <th>Penguasaan diri</th>
                            <th>Penguasaan diri</th>
                            <th>Penguasaan diri</th>
                            <th>Penguasaan diri</th>
                            <th rowspan="2">Rata-Rata</th>
                        </tr>
                        <tr>
                            <th>Berpikir terstruktur</th>
                            <th>Kemampuan komunikasi</th>
                            <th>Berpikir analisis</th>
                            <th>Komitmen</th>
                            <th>Tanggung jawab</th>
                            <th>Adaptasi</th>
                            <th>Manajemen waktu</th>
                            <th>Kerjasama</th>
                            <th>Membangun relasi</th>
                            <th>Integritas</th>
                            <th>Pelayanan</th>
                            <th>Komunikasi kerja</th>
                            <th>Penyelesaian masalah</th>
                            <th>Berpikir inovatif</th>
                            <th>Kepercayaan diri</th>
                            <th>Public speaking</th>
                            <th>Kepemimpinan</th>
                            <th>Manajemen konflik</th>
                            <th>Manajemen resiko</th>
                            <th>Resilience</th>
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
                {data:'kat1_var2',name:'kat1_var2'},
                {data:'kat2_var8',name:'kat2_var8'},
                {data:'kat3_var12',name:'kat3_var12'},
                {data:'kat2_var9',name:'kat2_var9'},
                {data:'kat3_var11',name:'kat3_var11'},
                {data:'kat3_var16',name:'kat3_var16'},
                {data:'kat1_var3',name:'kat1_var3'},
                {data:'kat3_var14',name:'kat3_var14'},
                {data:'kat1_var1',name:'kat1_var1'},
                {data:'kat3_var13',name:'kat3_var13'},
                {data:'kat1_var6',name:'kat1_var6'},
                {data:'kat3_var17',name:'kat3_var17'},
                {data:'kat4_var18',name:'kat4_var18'},
                {data:'kat4_var19',name:'kat4_var19'},
                {data:'kat2_var7',name:'kat2_var7'},
                {data:'kat3_var15',name:'kat3_var15'},
                {data:'kat4_var20',name:'kat4_var20'},
                {data:'kat2_var10',name:'kat2_var10'},
                {data:'kat1_var4',name:'kat1_var4'},
                {data:'kat1_var5',name:'kat1_var5'},
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
