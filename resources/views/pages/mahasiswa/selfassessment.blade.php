@extends('layouts.app')

@section('title', 'Self Assesment')
@section('desc', ' Penilaian Mandiri. ')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Self Assesment</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive d-none">
                <table class="table table-striped w-100">
                    <thead>
                        <tr>
                            <th>Kategori</th>
                            <th>No</th>
                            <th>Variabel</th>
                            <th>Aitem</th>
                            <th>Kode</th>
                            <th>Ya</th>
                            <th>Tidak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Social Skill</th>
                            <td>1</td>
                            <td>Kemampuan Komunikasi</td>
                            <td>Saya aktif memahami pesan yang ingin disampaikan lawan bicara </td>
                            <td>KK1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya menanggapi lawan bicara setelah dia selesai berbicara</td>
                            <td>KK2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya langsung menanggapi lawan yang masih berbicara saat saya sudah paham maksudnya</td>
                            <td>KK3R</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya cenderung mengonfirmasi kembali maksud lawan bicara sebelum menanggapinya</td>
                            <td>KK4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya menatap lawan bicara yang sedang berkomunikasi dengan saya</td>
                            <td>KK5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td>2</td>
                            <td>Kerja  Sama</td>
                            <td>Saya mengutamakan kepentingan bersama</td>
                            <td>KS1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya bisa menempatkan diri dalam kelompok</td>
                            <td>KS2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu berkoordinasi dengan kelompok </td>
                            <td>KS3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Komunikasi saya dengan kelompok berjalan lancar </td>
                            <td>KS4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Banyak teman yang senang berada di satu kelompok dengan saya</td>
                            <td>KS5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td>3</td>
                            <td>Komunikasi Kerja</td>
                            <td>Saya memberikan informasi secara formal dan lugas untuk berkomunikasi dalam bekerja</td>
                            <td>KKA1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya kerap menyampaikan informasi yang nyata bebas emosi pribadi dalam bekerja</td>
                            <td>KKA2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu memengaruhi orang lain untuk melakukan kegiatan yang mendukung organisasi.</td>
                            <td>KKA3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu membuat tabel, grafik, diagram untuk menyampaikan informasi dalam bekerja.</td>
                            <td>KKA4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya bisa menyampaikan informasi yang membuat orang lain melakukan tindakan tertentu</td>
                            <td>KKA5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td>4</td>
                            <td>Membangun Relasi</td>
                            <td>Saya bisa menyapa terlebih dahulu orang asing yang berada di dekat saya</td>
                            <td>MR1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya bisa memulai pembicaraan dengan orang yang baru saya kenal</td>
                            <td>MR2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mendengarkan informasi orang asing yang mengajak saya mengobrol</td>
                            <td>MR3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya menanggapi obrolan dari orang asing yang mengajak saya berkomunikasi</td>
                            <td>MR4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya senang berkenalan dengan orang baru</td>
                            <td>MR5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td>5</td>
                            <td>Pelayanan</td>
                            <td>Saya secara aktif mendengarkan kebutuhan orang lain </td>
                            <td>PN1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya menawarkan bantuan pada orang lain</td>
                            <td>PN2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu menyesuaikan diri dengan kebutuhan orang lain</td>
                            <td>PN3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya peka untuk membantu orang lain yang kesulitan menghidupkan keran air westafle di toilet mall </td>
                            <td>PN4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya menginformasikan tugas kepada teman lain yang berhalangan datang karena sakit</td>
                            <td>PN5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td>6</td>
                            <td>Public Speaking</td>
                            <td>Saya berani berbicara di depan orang banyak tanpa gugup</td>
                            <td>PS1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu menyampaikan informasi secara jelas kepada khalayak umum</td>
                            <td>PS2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya memahami teknik berbicara yang efektif di depan umum </td>
                            <td>PS3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Teman saya memahami penjelasan yang saya sampaikan ketika berbicara di depan umum</td>
                            <td>PS4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu berbicara dengan artikulasi yang baik di depan umum</td>
                            <td>PS5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th>Kognitif</th>
                            <td>7</td>
                            <td>Berpikir Analitis (Analitical Thinking)</td>
                            <td>Saya membaca instruksi tugas dengan teliti sebelum mengerjakannya</td>
                            <td>AT1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu mencari informasi secara detail untuk mencari fakta</td>
                            <td>AT2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu mengevaluasi situasi dari berbagai sudut pandang</td>
                            <td>AT3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu mengenali kelebihan dan kekurangan diri dengan baik</td>
                            <td>AT4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mengecek kembali dengan detail tugas yang saya kerjakan sebelum mengumpulkannya</td>
                            <td>AT5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td>8</td>
                            <td>Berpikir Inovatif (Inovative Thinking)</td>
                            <td>Saya mampu melihat peluang yang ada di sekitar</td>
                            <td>IT1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu menciptakan ide-ide yang tidak umum (unik)</td>
                            <td>IT2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu menerapkan ide yang tidak umum dalam menyelesaikan pekerjaan</td>
                            <td>IT3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya sering dimintai pendapat untuk membuat sesuatu yang unik</td>
                            <td>IT4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Teman saya menilai saya sebagai orang yang penuh dengan ide-ide baru</td>
                            <td>IT5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td>9</td>
                            <td>Berpikir terstruktur (Structural Thinking)</td>
                            <td>Ketika menghadapi masalah, saya mampu menguraikan berbagai kemungkinan sebab</td>
                            <td>ST1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Ketika menghadapi masalah, mampu menciptakan berbagai alternatif pemecahan masalah</td>
                            <td>ST2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu memilih solusi pemecahan masalah berdasarkan prioritas</td>
                            <td>ST3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Ketika saya memilih solusi pemecahan masalah, saya akan membuktikan terlebih dahulu untuk kemudian menyimpulkannya sebagai solusi terbaik</td>
                            <td>ST4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya cukup tangkas dalam berpikir dan bertindak saat menghadapi masalah</td>
                            <td>ST5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td>10</td>
                            <td>Penyelesaian masalah (Problem Solving)</td>
                            <td>Saya selalu menghadapi masalah yang ada</td>
                            <td>PS1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya menganalisis akar penyebab masalah dengan cermat</td>
                            <td>PS2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu memecahkan masalah dengan memberikan solusi konkret yang bisa diterapkan </td>
                            <td>PS3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya sering dimintai pendapat untuk memecahkan masalah kelompok</td>
                            <td>PS4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya yakin dengan solusi yang saya pilih</td>
                            <td>PS5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th>Penguasaan Diri</th>
                            <td>11</td>
                            <td>Adaptasi </td>
                            <td>Saya senang memasuki lingkungan baru</td>
                            <td>A1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Mudah bagi saya untuk mengatur ulang tenggat waktu menyelesaikan tugas jika terjadi perubahan jadwal.</td>
                            <td>A2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mau untuk mengganti rencana yang telah dibuat apabila ada masukan yang lebih baik</td>
                            <td>A3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya bisa cepat menyesuaikan diri dengan perubahan besar</td>
                            <td>A4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Mudah bagi saya menemukan alternatif pelaksanaan kegiatan ketika ada perubahan mendadak</td>
                            <td>A5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td>12</td>
                            <td>Kepemimpinan (Leadership)</td>
                            <td>Saya biasa memimpin jalannya diskusi dalam rapat kelompok</td>
                            <td>L1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu mengenali potensi dan kelemahan setiap anggota kelompok</td>
                            <td>L2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu memengaruhi orang lain untuk setuju dengan arahan saya</td>
                            <td>L3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Ide saya biasanya didengar orang lain</td>
                            <td>L4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu mengarahkan anggota untuk melakukan pekerjaan yang diinstruksikan</td>
                            <td>L5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td>13</td>
                            <td>Manajemen konflik (Conflict Management)</td>
                            <td>Saya mampu menjadi penengah jika terjadi perselisihan di antara teman-teman </td>
                            <td>CM1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu mendamaikan teman-teman saya yang sedang berselisih</td>
                            <td>CM2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu menyadari jika ada konflik di sekitar</td>
                            <td>CM3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Ketika ada konflik di dalam kelompok saya berinisiatif mendengarkan pemahaman masing-masing pihak</td>
                            <td>CM4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya bisa memengaruhi pihak yang berkonflik untuk bisa berbaikan dengan memberikan pemahaman yang dapat diterima</td>
                            <td>CM5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td>14</td>
                            <td>Manajemen resiko (Risk Management)</td>
                            <td>Saya kerap mengidentifikasi berbagai risiko sebelum mengerjakan</td>
                            <td>RM1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya selalu mengambil keputusan dengan risiko yang paling sesuai dengan situasi dan kebutuhan</td>
                            <td>RM2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya memiliki berbagai set perencanaan dalam mengerjakan sesuatu (plan a, plan b, dan plan c)</td>
                            <td>RM3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya selalu mempersiapkan antisipasi risiko atas keputusan yang diambil</td>
                            <td>RM4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya cenderung bekerja tanpa terlebih dahulu berpikir panjang dengan siap menerima konsekuensi</td>
                            <td>RM5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td>15</td>
                            <td>Manajemen Waktu (Time Management)</td>
                            <td>Saya dapat mengerjakan beberapa tugas secara bersamaan</td>
                            <td>TM1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Dalam tim saya berperan sebagai pencatat waktu yang baik</td>
                            <td>TM2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya dapat menentukan prioritas tugas dalam setiap situasi</td>
                            <td>TM3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mengerjakan tugas segera setelah mendapatkan delegasi tugas</td>
                            <td>TM4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya membuat time table untuk merencanakan kegiatan saya</td>
                            <td>TM5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td>16</td>
                            <td>Percaya Diri (Self-Confidence)</td>
                            <td>Saya merasa yakin dapat selalu menyelesaikan tugas yang diberikan dengan optimal</td>
                            <td>SC1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya memiliki kualitas diri yang baik untuk dihargai orang lain</td>
                            <td>SC2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Orang lain menghargai  tanpa menganggap remeh diri saya </td>
                            <td>SC3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu membuat orang lain mengerjakan hal yang saya inginkan darinya</td>
                            <td>SC4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya bisa membuat orang lain mendengarkan apa yang saya sampaikan</td>
                            <td>SC5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td>17</td>
                            <td>Resiliensi </td>
                            <td>Ketika menghadapi masalah bertubi-tubi saya menyelesaikannya dengan tenang agar tetap realistis</td>
                            <td>R1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya yakin pasti akan ada solusi atas berbagai masalah yang saya hadapi</td>
                            <td>R2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya tabah untuk menyelesaikan permasalahan dengan mempertimbangkan prioritas masalah</td>
                            <td>R3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya selalu menghadapi masalah yang ada</td>
                            <td>R4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya meregulasi emosi terlebih dahulu untuk kemudian menyelesaikan masalah secara rasional</td>
                            <td>R5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th>Sikap Kerja</th>
                            <td>18</td>
                            <td>Integritas</td>
                            <td>Saya menyelesaikan sebuah tugas yang diberikan tanpa meniru tugas orang lain</td>
                            <td>I1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mengerjakan tugas sesuai instruksi </td>
                            <td>I2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya membagi tugas kelompok sesuai dengan keahlian masing-masing anggota</td>
                            <td>I3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya selalui menuliskan sumber dalam tugas esay yang saya kerjakan</td>
                            <td>I4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya menunjukkan usaha terbaik dalam menyelesaikan tugas yang didelegasikan kepada saya </td>
                            <td>I5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td>19</td>
                            <td>Komitmen (Commitment)</td>
                            <td>Saya mampu menjaga nama baik dan citra organisasi  saya</td>
                            <td>C1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mampu berpartisipasi dalam semua kegiatan yang dilakukan organisasi saya</td>
                            <td>C2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya berupaya untuk berprestasi demi organisasi saya</td>
                            <td>C3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya melakukan upaya terbaik untuk mengembangkan institusi </td>
                            <td>C4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya menyampaikan hal yang baik mengenai organisasi dengan tidak menjelek-jelekkannya.</td>
                            <td>C5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td>20</td>
                            <td>Tanggung jawab (Responsibility</td>
                            <td>Saya mengerjakan setiap tugas yang diberikan dengan sungguh-sungguh</td>
                            <td>R1</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya menjalankan tugas yang diberikan hingga selesai</td>
                            <td>R2</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya sigap memenuhi permintaan terkait tugas dengan segera</td>
                            <td>R3</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Saya mengerjakan tugas tanpa menunda-nunda pengerjaannya</td>
                            <td>R4</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td>Setiap tugas yang menjadi tanggung jawab saya adalah penting.</td>
                            <td>R5</td>
                            <form>
                            <td>
                                <input type="radio" name="pilih" value="ya" class="m-auto">
                            </td>
                            <td>
                                <input type="radio" name="pilih" value="tidak" class="m-auto">
                            </td>
                            </form>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
