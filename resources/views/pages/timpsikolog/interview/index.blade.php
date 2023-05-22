@extends('layouts.app')

@section('title', 'Interview')
@section('desc', ' Wawancara. ')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Interview List</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped w-100" id="datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Semester (Saat Ikut Kegiatan)</th>
                            <th>Bidang kegiatan</th>
                            <th>Capaian Kegiatan</th>
                            <th>Lingkup Kegiatan</th>
                            <th>Jumlah Peserta</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Bukti Kegiatan</th>
                            <th>Link Kegiatan</th>
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
            {data:'semester',name:'semester'},
            {data:'bidang',name:'bidang'},
            {data:'capaian',name:'capaian'},
            {data:'lingkup',name:'lingkup'},
            {data:'jumlah_peserta',name:'jumlah_peserta'},
            {data:'nama_kegiatan',name:'nama_kegiatan'},
            {data:'tanggal_kegiatan',name:'tanggal_kegiatan'},
            {data:'bukti',name:'bukti'},
            {data:'link',name:'link'},
            {data:'status',name:'status'}
            ],
            columnDefs: [{
                "targets": 8,
                "render": function(data, type, row, meta) {
                    let link = ``;
                    if(data) {
                        link = `storage/${data}`;
                    }

                    return `<a href="{{ asset('/') }}${link}" target="_blank">Detail Bukti</a>`;
                }
            },{
                "targets": 9,
                "render": function(data, type, row, meta) {
                    let link2 = ``;
                    if(data) {
                        link2 = `${data}`;
                    }

                    return `<a href="${link2}" target="_blank">Link Kegiatan ${row.nama_kegiatan[0].toUpperCase() + row.nama_kegiatan.slice(1)}</a>`;
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
