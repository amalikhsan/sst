@extends('layouts.app')

@section('title', 'Users Score')
@section('desc', ' Skor Pengguna. ')

@section('content')
@if($selfassessmenttwo && $hasilactivity>=0 && $interview && $studentprofile)
    <div class="card">
        <div class="card-header">
            <h4>Student Profile</h4>
        </div>
        <div class="card-body">
            <div class="row mb-5 h-auto">
                <div class="col-md-4">
                    <div class="card shadow-none h-100" style="border:dashed #acacac;">
                        <div class="card-body p-0">
                            @if($studentprofile->user->avatar)
                                <img style="width:100%;height:100%;" alt="image" src="{{ asset('storage/'.$studentprofile->user->avatar) }}" class="img-fluid">
                            @else
                                <img style="width:100%;height:100%;" alt="image" src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="img-fluid">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card shadow-none h-100" style="border:dashed #acacac;">
                        <div class="card-body p-0">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>Nama Mahasiswa</th>
                                <td>{{ $studentprofile->user->name }}</td>
                            </tr>
                            <tr>
                                <th>NPM</th>
                                <td>{{ $studentprofile->npm }}</td>
                            </tr>
                            <tr>
                                <th>Jurusan</th>
                                <td>{{ $studentprofile->jurusan }}</td>
                            </tr>
                            <tr>
                                <th>Prodi</th>
                                <td>{{ $studentprofile->prodi }}</td>
                            </tr>
                            <tr>
                                <th>Jalur Masuk</th>
                                <td>{{ $studentprofile->jalur_masuk }}</td>
                            </tr>
                            <tr>
                                <th>Beasiswa</th>
                                <td>{{ $studentprofile->beasiswa }}</td>
                            </tr>
                            <tr>
                                <th>Pendapatan Orang Tua</th>
                                <td>{{ $studentprofile->pendapatan_orangtua }}</td>
                            </tr>
                            <tr>
                                <th>Uang Saku Satu Bulan</th>
                                <td>{{ $studentprofile->uang_saku_satu_bulan }}</td>
                            </tr>
                            <tr>
                                <th>IP</th>
                                <td>{{ $studentprofile->index_prestasi }}</td>
                            </tr>
                            <tr>
                                <th>IPK</th>
                                <td>{{ $studentprofile->index_prestasi_kumulatif }}</td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Data Graph</h4>
        </div>
        <div class="card-body">
            <div class="row mb-5">
                <div class="col-xxl-3 col-lg-6 col-12">
                    <div class="card shadow-none">
                    <canvas id="myChart" class="w-100" style="min-height:300px;"></canvas>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-12">
                    <div class="card shadow-none">
                    <canvas id="myChart1" class="w-100" style="min-height:300px;"></canvas>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-12">
                    <div class="card shadow-none">
                    <canvas id="myChart2" class="w-100" style="min-height:300px;"></canvas>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-12">
                    <div class="card shadow-none">
                    <canvas id="myChart3" class="w-100" style="min-height:300px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>User Score</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped w-100" id="datatables">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Kategori</th>
                            <th>Variabel</th>
                            <th>Konversi Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="badge badge-primary"> </span></td>
                            <td>Keterampilan Sosial</td>
                            <td>Kemampuan Komunikasi</td>
                            <td>{{ round(($selfassessmenttwo->kat1_var1+$hasilactivity+$interview->kat1_var1)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-primary"> </span></td>
                            <td>Keterampilan Sosial</td>    
                            <td>Kerja Sama</td>
                            <td>{{ round(($selfassessmenttwo->kat1_var2+$hasilactivity+$interview->kat1_var2)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-primary"> </span></td>
                            <td>Keterampilan Sosial</td>
                            <td>Komunikasi Kerja</td>
                            <td>{{ round(($selfassessmenttwo->kat1_var3+$hasilactivity+$interview->kat1_var3)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-primary"> </span></td>
                            <td>Keterampilan Sosial</td>
                            <td>Membangun Relasi</td>
                            <td>{{ round(($selfassessmenttwo->kat1_var4+$hasilactivity+$interview->kat1_var4)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-primary"> </span></td>
                            <td>Keterampilan Sosial</td>
                            <td>Pelayanan</td>
                            <td>{{ round(($selfassessmenttwo->kat1_var5+$hasilactivity+$interview->kat1_var5)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-primary"> </span></td>
                            <td>Keterampilan Sosial</td>
                            <td>Public Speaking</td>
                            <td>{{ round(($selfassessmenttwo->kat1_var6+$hasilactivity+$interview->kat1_var6)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-danger"> </span></td>
                            <td>Kognitif</td>
                            <td>Berpikir Analitis (Analitical Thinking)</td>
                            <td>{{ round(($selfassessmenttwo->kat2_var7+$hasilactivity+$interview->kat2_var7)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-danger"> </span></td>
                            <td>Kognitif</td>
                            <td>Berpikir Inovatif (Inovative Thinking)</td>
                            <td>{{ round(($selfassessmenttwo->kat2_var8+$hasilactivity+$interview->kat2_var8)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-danger"> </span></td>
                            <td>Kognitif</td>
                            <td>Berpikir terstruktur (Structural Thinking)</td>
                            <td>{{ round(($selfassessmenttwo->kat2_var9+$hasilactivity+$interview->kat2_var9)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-danger"> </span></td>
                            <td>Kognitif</td>
                            <td>Penyelesaian masalah (Problem Solving)</td>
                            <td>{{ round(($selfassessmenttwo->kat2_var10+$hasilactivity+$interview->kat2_var10)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-secondary"> </span></td>
                            <td>Penguasaan Diri</td>
                            <td>Adaptasi </td>
                            <td>{{ round(($selfassessmenttwo->kat3_var11+$hasilactivity+$interview->kat3_var11)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-secondary"> </span></td>
                            <td>Penguasaan Diri</td>
                            <td>Kepemimpinan (Leadership)</td>
                            <td>{{ round(($selfassessmenttwo->kat3_var12+$hasilactivity+$interview->kat3_var12)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-secondary"> </span></td>
                            <td>Penguasaan Diri</td>
                            <td>Manajemen konflik (Conflict Management)</td>
                            <td>{{ round(($selfassessmenttwo->kat3_var13+$hasilactivity+$interview->kat3_var13)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-secondary"> </span></td>
                            <td>Penguasaan Diri</td>
                            <td>Manajemen resiko (Risk Management)</td>
                            <td>{{ round(($selfassessmenttwo->kat3_var14+$hasilactivity+$interview->kat3_var14)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-secondary"> </span></td>
                            <td>Penguasaan Diri</td>
                            <td>Manajemen Waktu (Time Management)</td>
                            <td>{{ round(($selfassessmenttwo->kat3_var15+$hasilactivity+$interview->kat3_var15)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-secondary"> </span></td>
                            <td>Penguasaan Diri</td>
                            <td>Percaya Diri (Self-Confidence)</td>
                            <td>{{ round(($selfassessmenttwo->kat3_var16+$hasilactivity+$interview->kat3_var16)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-secondary"> </span></td>
                            <td>Penguasaan Diri</td>
                            <td>Resiliensi</td>
                            <td>{{ round(($selfassessmenttwo->kat3_var17+$hasilactivity+$interview->kat3_var17)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-warning"> </span></td>
                            <td>Sikap Kerja</td>
                            <td>Integritas</td>
                            <td>{{ round(($selfassessmenttwo->kat4_var18+$hasilactivity+$interview->kat4_var18)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-warning"> </span></td>
                            <td>Sikap Kerja</td>
                            <td>Komitmen (Commitment)</td>
                            <td>{{ round(($selfassessmenttwo->kat4_var19+$hasilactivity+$interview->kat4_var19)/3,1) }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-warning"> </span></td>
                            <td>Sikap Kerja</td>
                            <td>Tanggung jawab (Responsibility)</td>
                            <td>{{ round(($selfassessmenttwo->kat4_var20+$hasilactivity+$interview->kat4_var20)/3,1) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Index Deskription</h4>
        </div>
        <div class="card-body">
            <div class="teble-responsive">
                <table class="table table-striped w-100" id="datatables3">
                    <thead>
                        <tr>
                            <th>Indeks</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>&gt;2,76</td>
                            <td>Kurang Memuaskan</td>
                        </tr>
                        <tr>
                            <td>2,76 - 3,00</td>
                            <td>Cukup Memuaskan</td>
                        </tr>
                        <tr>
                            <td>3,01 - 3,50</td>
                            <td>Memuaskan</td>
                        </tr>
                        <tr>
                            <td>&gt;3,50</td>
                            <td>Sangat Memuaskan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Soft Skill Description</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped w-100" id="datatables2">
                    <thead>
                        <tr>
                            <th>SOFT SKILL</th>
                            <th>KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kemampuan komunikasi</td>
                            <td>Kemampuan untuk mendengar dan berbicara secara bergiliran, melembutkan suara (tidak membentak), menyakinkan orang untuk mengemukakan pendapat, mendengarkan sampai orang tersebut menyelesaikan pembicaraannya</td>
                        </tr>
                        <tr>
                            <td>Kerja Sama</td>
                            <td>Kerjasama juga diartikan sebagai kegiatan yang di lakukan secara bersama-sama dari berbagai pihak untuk mencapai tujuan bersama</td>
                        </tr>
                        <tr>
                            <td>Komunikasi Kerja</td>
                            <td>Komunikasi kerja (bisnis) merupakan kegiatan berbagi informasi antar individu dalam suatu perusahaan yang dilakukan untuk kepentingan komersial organisasi</td>
                        </tr>
                        <tr>
                            <td>Membangun Relasi</td>
                            <td>Membangun relasi merupakan kombinasi soft-skill yang diterapkan individu untuk terhubung dan membentuk hubungan yang positif dengan orang lain</td>
                        </tr>
                        <tr>
                            <td>Pelayanan</td>
                            <td>Setiap kegiatan yang diperuntukkan atau ditujukan untuk memberikan kepuasan kepada pelanggan, melalui pelayanan ini keinginan dan kebutuhan pelanggan dapat terpenuhi</td>
                        </tr>
                        <tr>
                            <td>Public Speaking</td>
                            <td>Public speaking adalah kemampuan berkomunikasi di depan umum dengan profesional dan sistematis baik dalam komunikasi dua belah pihak maupun dalam komunikasi kelompok</td>
                        </tr>
                        <tr>
                            <td>Berpikir Analitis</td>
                            <td>Berpikir analisis adalah kemampuan untuk memeriksa dengan penuh ketelitian, memerinci fakta-fakta, dan memikirkan kekuatan dan kelemahannya masing-masing</td>
                        </tr>
                        <tr>
                            <td>Berpikir Inovatif</td>
                            <td>Perilaku inovatif juga didefinisikan sebagai sebuah tindakan yang dilakukan untuk menciptakan dan mengambil ideide, pemikiran, atau cara-cara baru untuk di terapkan dalam pelaksanaan dan penyelesaian pekerjaan</td>
                        </tr>
                        <tr>
                            <td>Berpikir Terstruktur</td>
                            <td>Berpikir logis juga dapat diartikan sebagai kemampuan siswa untuk menarik kesimpulan yang sah menurut aturan logika dan dapat membuktikan kesimpulan itu benar (valid) sesuai dengan pengetahuan-pengetahuan sebelumnya yang sudah diketahui</td>
                        </tr>
                        <tr>
                            <td>Penyelesaian Masalah</td>
                            <td>Proses pemilihan alternatif solusi permasalahan. Kemampuan pengambilan keputusan adalah upaya menyelesaikan masalah dengan memilih solusi alternatif yang ada</td>
                        </tr>
                        <tr>
                            <td>Adaptabilitas</td>
                            <td>Serangkaian keterampilan yang mencakup kemampuan seseorang untuk menyesuaikan diri di tempat kerja. Mampu beradaptasi berarti mampu merespons perubahan dengan cepat dalam suatu pekerjaan</td>
                        </tr>
                        <tr>
                            <td>Kepemimpinan</td>
                            <td>Kemampuan yang dimiliki seseorang untuk mengatur oranglain dan mampu membuat keputusan untuk mencapai tujuan organisasi</td>
                        </tr>
                        <tr>
                            <td>Manajemen Konflik</td>
                            <td>Manajemen konflik sebagai proses pengkoordinasian dengan menggunakan tehnik-tehnik resolusi dan stimulasiuntuk meraih tingkatan konflik yang diinginkan sehingga diperoleh solusi tepat atas konflik tersebut</td>
                        </tr>
                        <tr>
                            <td>Manajemen Resiko</td>
                            <td>Manajemen risiko adalah usaha mengurangi risiko dalam proses pelaksanaan teknis dan pengambilan keputusan</td>
                        </tr>
                        <tr>
                            <td>Manajemen Waktu</td>
                            <td>Manajemen waktu adalah segala upaya dan tindakan seseorang yang dilakukan untuk mengontrol dan merencanakan pekerjaan agar mampu memanfaatkan waktu secara profuktif</td>
                        </tr>
                        <tr>
                            <td>Percaya Diri</td>
                            <td>Self confidence (kepercayaan diri) adalah keyakinan individu secara akan kemampuan yang dia miliki dan perasaan berharga individu mengenai dirinya</td>
                        </tr>
                        <tr>
                            <td>Resiliensi</td>
                            <td>Kemampuan untuk mengatasi berbagai tantangan, permasalahan yang menimbulkan stres,depresi dan kecemasan maka setiap mahasiswa harus bisa menjadiresilien yaitu dapat bangkit, mampu untuk bertahan, dan memperbaiki kekecewaan yang dihadapinya</td>
                        </tr>
                        <tr>
                            <td>Integritas</td>
                            <td>Menggambarkan integritas sebagai ”konsistensi terhadap apa yang dianggap benar dan salah dalam hidup Anda</td>
                        </tr>
                        <tr>
                            <td>Komitmen</td>
                            <td>komitmen sebagai rasa identifikasi (kepercayaan terhadap nilai-nilai organisasi), keterlibatan (kesediaan untuk berusaha sebaik mungkin demi kepentingan organisasi) dan loyalitas (keinginan untuk tetap menjadi anggota organisasi)</td>
                        </tr>
                        <tr>
                            <td>Tanggung Jawab</td>
                            <td>kesanggupan untuk mntapkan sikap trhadap suatu prbuatan yang dimban dan ksanggupan untuk mmikul rsiko dari suatu prbuatan yang dilakukan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@else
    Mahasiswa belum mempunyai score
@endif
@endsection

@if($selfassessmenttwo && $hasilactivity>=0 && $interview && $studentprofile)
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var data = [
        ["Keterampilan Sosial", "Kemampuan Komunikasi"],
        ["Keterampilan Sosial", "Kerja Sama"],
        ["Keterampilan Sosial", "Komunikasi Kerja"],
        ["Keterampilan Sosial", "Membangun Relasi"],
        ["Keterampilan Sosial", "Pelayanan"],
        ["Keterampilan Sosial", "Public Speaking"],
        ["Kognitif", "Berpikir Analitis (Analitical Thinking)"],
        ["Kognitif", "Berpikir Inovatif (Inovative Thinking)"],
        ["Kognitif", "Berpikir terstruktur (Structural Thinking)"],
        ["Kognitif", "Penyelesaian masalah (Problem Solving)"],
        ["Penguasaan Diri", "Adaptasi"],
        ["Penguasaan Diri", "Kepemimpinan (Leadership)"],
        ["Penguasaan Diri", "Manajemen konflik (Conflict Management)"],
        ["Penguasaan Diri", "Manajemen resiko (Risk Management)"],
        ["Penguasaan Diri", "Manajemen Waktu (Time Management)"],
        ["Penguasaan Diri", "Percaya Diri (Self-Confidence)"],
        ["Penguasaan Diri", "Resiliensi"],
        ["Sikap Kerja", "Integritas"],
        ["Sikap Kerja", "Komitmen (Commitment)"],
        ["Sikap Kerja", "Tanggung jawab (Responsibility)"]
    ];
    const dataitem = [
        {{ round(($selfassessmenttwo->kat1_var1+$hasilactivity+$interview->kat1_var1)/3,1) }},
        {{ round(($selfassessmenttwo->kat1_var2+$hasilactivity+$interview->kat1_var2)/3,1) }},
        {{ round(($selfassessmenttwo->kat1_var3+$hasilactivity+$interview->kat1_var3)/3,1) }},
        {{ round(($selfassessmenttwo->kat1_var4+$hasilactivity+$interview->kat1_var4)/3,1) }},
        {{ round(($selfassessmenttwo->kat1_var5+$hasilactivity+$interview->kat1_var5)/3,1) }},
        {{ round(($selfassessmenttwo->kat1_var6+$hasilactivity+$interview->kat1_var6)/3,1) }},
        {{ round(($selfassessmenttwo->kat2_var7+$hasilactivity+$interview->kat2_var7)/3,1) }},
        {{ round(($selfassessmenttwo->kat2_var8+$hasilactivity+$interview->kat2_var8)/3,1) }},
        {{ round(($selfassessmenttwo->kat2_var9+$hasilactivity+$interview->kat2_var9)/3,1) }},
        {{ round(($selfassessmenttwo->kat2_var10+$hasilactivity+$interview->kat2_var10)/3,1) }},
        {{ round(($selfassessmenttwo->kat3_var11+$hasilactivity+$interview->kat3_var11)/3,1) }},
        {{ round(($selfassessmenttwo->kat3_var12+$hasilactivity+$interview->kat3_var12)/3,1) }},
        {{ round(($selfassessmenttwo->kat3_var13+$hasilactivity+$interview->kat3_var13)/3,1) }},
        {{ round(($selfassessmenttwo->kat3_var14+$hasilactivity+$interview->kat3_var14)/3,1) }},
        {{ round(($selfassessmenttwo->kat3_var15+$hasilactivity+$interview->kat3_var15)/3,1) }},
        {{ round(($selfassessmenttwo->kat3_var16+$hasilactivity+$interview->kat3_var16)/3,1) }},
        {{ round(($selfassessmenttwo->kat3_var17+$hasilactivity+$interview->kat3_var17)/3,1) }},
        {{ round(($selfassessmenttwo->kat4_var18+$hasilactivity+$interview->kat4_var18)/3,1) }},
        {{ round(($selfassessmenttwo->kat4_var19+$hasilactivity+$interview->kat4_var19)/3,1) }},
        {{ round(($selfassessmenttwo->kat4_var20+$hasilactivity+$interview->kat4_var20)/3,1) }}
    ]
    var ctx = document.getElementById("myChart").getContext('2d');
    var ctx1 = document.getElementById("myChart1").getContext('2d');
    var ctx2 = document.getElementById("myChart2").getContext('2d');
    var ctx3 = document.getElementById("myChart3").getContext('2d');
    {{--  chart 1  --}}
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
        labels: [
                data[0][1],
                data[1][1],
                data[2][1],
                data[3][1],
                data[4][1],
                data[5][1]
        ],
        datasets: [{
            label: data[0][1],
            data: [
                dataitem[0],
                dataitem[1],
                dataitem[2],
                dataitem[3],
                dataitem[4],
                dataitem[5]
            ],
            backgroundColor: [
            'rgba(103, 119, 239, 1)',
            ],
        }]
        },
        options: {
        scales: {
            yAxes: [{
            ticks: {
                beginAtZero: true
            }
            }],
            x: {
            display: false, // Menyembunyikan label sumbu x
            },
        }
        }
    });
    {{--  chart 2  --}}
    var myChart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
        labels: [
            data[6][1],
            data[7][1],
            data[8][1],
            data[9][1]
        ],
        datasets: [{
            label: data[6][1],
            data: [
                dataitem[6],
                dataitem[7],
                dataitem[8],
                dataitem[9]
            ],
            backgroundColor: [
            'rgba(252, 84, 75, 1)',
            ],
        }]
        },
        options: {
        scales: {
            yAxes: [{
            ticks: {
                beginAtZero: true
            }
            }],
            x: {
            display: false, // Menyembunyikan label sumbu x
            },
        }
        }
    });
    {{--  card3  --}}
    var myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
        labels: [
            data[10][1],
            data[11][1],
            data[12][1],
            data[13][1],
            data[14][1],
            data[15][1],
            data[16][1]
        ],
        datasets: [{
            label: data[10][1],
            data: [
                dataitem[10],
                dataitem[11],
                dataitem[12],
                dataitem[13],
                dataitem[14],
                dataitem[15],
                dataitem[16]
            ],
            backgroundColor: [
            'rgba(52, 57, 94, 1)',
            ],
        }]
        },
        options: {
        scales: {
            yAxes: [{
            ticks: {
                beginAtZero: true
            }
            }],
            x: {
            display: false, // Menyembunyikan label sumbu x
            },
        }
        }
    });
    {{--  chart 4  --}}
    var myChart3 = new Chart(ctx3, {
        type: 'bar',
        data: {
        labels: [
            data[17][1],
            data[18][1],
            data[19][1],
        ],
        datasets: [{
            label: data[17][1],
            data: [
                dataitem[17],
                dataitem[18],
                dataitem[19],
            ],
            backgroundColor: [
            'rgba(255, 164, 38, 1)',
            ],
        }]
        },
        options: {
        scales: {
            yAxes: [{
            ticks: {
                beginAtZero: true
            }
            }],
            x: {
            display: false, // Menyembunyikan label sumbu x
            },
        }
        }
    });

    $(function() {
        const datatable = $('#datatables').DataTable({
            "dom": 'Bfrtip',
            "buttons":[
                {extend:'copy',className:"btn btn-primary"},
                {extend:'excel',className:"btn btn-primary"},
                {extend:'csv',className:"btn btn-primary"}
                ],
            "lengthMenu": [
                [-1],
                ['ALL']
            ]
        });
        const datatable2 = $('#datatables2').DataTable({
            "dom": 'Bfrtip',
            "buttons":[
                {extend:'copy',className:"btn btn-primary"},
                {extend:'excel',className:"btn btn-primary"},
                {extend:'csv',className:"btn btn-primary"}
                ],
            "lengthMenu": [
                [-1],
                ['ALL']
            ]
        });
        const datatable3 = $('#datatables3').DataTable({
            "dom": 'Bfrtip',
            "buttons":[
                {extend:'copy',className:"btn btn-primary"},
                {extend:'excel',className:"btn btn-primary"},
                {extend:'csv',className:"btn btn-primary"}
                ],
            "lengthMenu": [
                [-1],
                ['ALL']
            ]
        });
    });
</script>
@endpush()
@endif
