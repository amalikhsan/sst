@extends('layouts.app')

@section('title', 'Activity Report')
@section('desc', ' Aktivitas Laporan. ')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>User List</h4>
            <div class="card-header-action">
                <a href="{{ route('activityreport-create') }}" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Add New
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped w-100" id="datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            {{--  <th>Nama Lengkap</th>
                            <th>NPM</th>
                            <th>Jurusan</th>
                            <th>Program Studi</th>
                            <th>Jalur Masuk</th>
                            <th>Semester/Angkatan</th>
                            <th>Beasiswa</th>
                            <th>Pendapatan Orang Tua</th>
                            <th>Uang Saku Satu Bulan</th>
                            <th>Index Prestasi</th>
                            <th>Index Prestasi Kumulatif</th>  --}}
                            <th>Bidang</th>
                            <th>Capaian</th>
                            <th>Lingkup</th>
                            <th>Jumlah_peserta</th>
                            <th>Nama_kegiatan</th>
                            <th>Bukti</th>
                            <th>Status</th>
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
               /*{data:'nama_lengkap',name:'nama_lengkap'},
            {data:'npm',name:'npm'},
            {data:'jurusan',name:'jurusan'},
            {data:'prodi',name:'prodi'},
            {data:'jalur_masuk',name:'jalur_masuk'},
            {data:'semester',name:'semester'},
            {data:'beasiswa',name:'beasiswa'},
            {data:'pendapatan_orangtua',name:'pendapatan_orangtua'},
            {data:'uang_saku_satu_bulan',name:'uang_saku_satu_perbulan'},
            {data:'index_prestasi',name:'index_prestasi'},
            {data:'index_prestasi_kumulatif',name:'index_prestasi_kumulatif'},*/
            {data:'bidang',name:'bidang'},
            {data:'capaian',name:'capaian'},
            {data:'lingkup',name:'lingkup'},
            {data:'jumlah_peserta',name:'jumlah_peserta'},
            {data:'nama_kegiatan',name:'nama_kegiatan'},
            {data:'bukti',name:'bukti'},
            {data:'status',name:'status'}
            ],
            columnDefs: [{
                "targets": 6,
                "render": function(data, type, row, meta) {
                    let link = ``;
                    if(data) {
                        link = `storage/${data}`;
                    }

                    return `<a href="{{ asset('/') }}${link}">File Bukti</a>`;
                }
            },{
                "targets": 1,
                "render": function(data, type, row, meta) {
                    return `
                        ${data}
                        <form action="{{ url('/activityreport') }}/${row.id}" method="POST" class="table-links">
                            @method('DELETE')
                            @csrf
                            <a
                                href="{{ url('/activityreport') }}/${row.id}/edit"
                                class="btn btn-sm"
                            >
                                Edit
                            </a>
                            <button
                                type="submit"
                                class="text-danger btn-delete btn btn-sm"
                            >
                                Delete
                            </button>
                        </form>
                    `;
                }
            },{
                "targets": -1,
                "render": function(data, type, row, meta) {
                    if(data=="allow"){
                        return `<div class="badge badge-success">Verifikasi</div>`;
                    } else {
                        return `<div class="badge badge-danger">Belum Diverifikasi</div>`;
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
@endpush()
