@extends('layouts.app')

@section('title', 'All Score')
@section('desc', ' Semua Skor. ')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>All Score</h4>
            <div class="card-header-action">
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped w-100" id="datatable">
                    <thead>
                        <tr>
                            <th>Kategori</th>
                            <th>Soft Skill</th>
                            <th>Self Assessment</th>
                            <th>Activity</th>
                            <th>Interview</th>
                            <th>Total Score</th>
                            <th>Score Conversion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>50%</td>
                            <td>30%</td>
                            <td>20%</td>
                            <td>100%</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>2</td>
                            <td>1.2</td>
                            <td>0.8</td>
                            <td>4</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Keterampilan Sosial</td>
                            <td>Kemampuan Komunikasi</td>
                            <td>1.5</td>
                            <td>1.2</td>
                            <td>0.8</td>
                            <td>3.5</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Kerja Sama</td>
                            <td>2</td>
                            <td>1.2</td>
                            <td>0.4</td>
                            <td>3.6</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Komunikasi Kerja</td>
                            <td>2</td>
                            <td>1.2</td>
                            <td>0.8</td>
                            <td>4</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Membangun Relasi</td>
                            <td>2</td>
                            <td>1.2</td>
                            <td>0.8</td>
                            <td>4</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pelayanan</td>
                            <td>1</td>
                            <td>1.2</td>
                            <td>0.4</td>
                            <td>2.6</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Public Speaking</td>
                            <td>1.5</td>
                            <td>1.2</td>
                            <td>0.4</td>
                            <td>3.1</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Kognitif</td>
                            <td>Berpikir Analitis (Analitical Thinking)</td>
                            <td>0.5</td>
                            <td>1.2</td>
                            <td>0.3</td>
                            <td>2</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Berpikir Inovatif (Inovative Thinking)</td>
                            <td>0.5</td>
                            <td>0.1</td>
                            <td>0.5</td>
                            <td>1.1</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Berpikir terstruktur (Structural Thinking)</td>
                            <td>0.5</td>
                            <td>1.2</td>
                            <td>0.3</td>
                            <td>2</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Penyelesaian masalah (Problem Solving)</td>
                            <td>0.5</td>
                            <td>1.2</td>
                            <td>0.2</td>
                            <td>1.9</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Penguasaan Diri</td>
                            <td>Adaptasi </td>
                            <td>1</td>
                            <td>0.4</td>
                            <td>0.7</td>
                            <td>2.1</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Kepemimpinan (Leadership)</td>
                            <td>0.5</td>
                            <td>1</td>
                            <td>0.1</td>
                            <td>1.6</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Manajemen konflik (Conflict Management)</td>
                            <td>0.2</td>
                            <td>1.2</td>
                            <td>0.4</td>
                            <td>1.8</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Manajemen resiko (Risk Management)</td>
                            <td>1.5</td>
                            <td>1.2</td>
                            <td>0.4</td>
                            <td>3.1</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Manajemen Waktu (Time Management)</td>
                            <td>1.5</td>
                            <td>1.2</td>
                            <td>0.4</td>
                            <td>3.1</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Percaya Diri (Self-Confidence)</td>
                            <td>1</td>
                            <td>0.2</td>
                            <td>0.1</td>
                            <td>1.3</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Resiliensi</td>
                            <td>1</td>
                            <td>1.2</td>
                            <td>0.4</td>
                            <td>2.6</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Sikap Kerja</td>
                            <td>Integritas</td>
                            <td>1</td>
                            <td>1.2</td>
                            <td></td>
                            <td>2.2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Komitmen (Commitment)</td>
                            <td>1.5</td>
                            <td>1.2</td>
                            <td>0.8</td>
                            <td>3.5</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tanggung jawab (Responsibility</td>
                            <td>1</td>
                            <td>0.8</td>
                            <td>0.2</td>
                            <td>2</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(function() {
        var datatable = $('#datatable').DataTable({
            lengthMenu: [
                [-1],
                ['ALL']
            ],
            responsive: true,
            ordering: false,
            dom: 'Bfrtip',
            buttons: [
                'print','copy', 'excel', 'pdf'
            ],
        });
    });
</script>
@endpush()
