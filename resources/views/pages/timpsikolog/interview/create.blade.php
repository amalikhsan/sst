@extends('layouts.app')

@section('title', 'Create New Interview Score')
@section('desc', ' Buat skor interview Baru. ')

@section('content')
<div class="card">
    <form action="{{ route('interview-timpsikolog/store') }}" method="POST" class="needs-validation" autocomplete="off" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="card-header">
            <h4>Interview Form</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label class="form-label">Sistem Penilaian</label>
                <ul>
                    <li>1 = Kurang</li>
                    <li>2 = Cukup</li>
                    <li>3 = Baik</li>
                    <li>4 = Sangat Baik</li>
                </ul>
            </div>
            <div class="form-group">
                <label class="form-label" for="user_id">Pilih Mahasiswa</label>
                <select name="user_id" class="form-control  @error('user_id') is-invalid @enderror" id="user_id">
                    <option value="">Pilih Mahasiswa</option>
                    @foreach($items as $item)
                    <option value="{{ $item->user_id }}">{{ $item->user->name }} | {{ $item->tanggal_wawancara }}</option>
                    @endforeach
                </select>
                @error('user_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <h5>Ceritakan tentang diri anda secara singkat?</h5>
            <div class="form-group">
                <label for="item1">Kognitif (Berfikir Terstruktur)</label>
                <select name="item1" class="form-control  @error('item1') is-invalid @enderror" id="item1">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="item2"></label>
                <label for="item2">Social Skill (Kemampuan komunikasi)</label>
                <select name="item2" class="form-control  @error('item2') is-invalid @enderror" id="item2">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <h5>Mengapa anda memilih kuliah di POLSRI? mengapa memilih jurusan saat ini?</h5>
            <div class="form-group">
                <label class="form-label" for="item3"></label>
                <label for="item3">Kognitif (Berpikir analisis)</label>
                <select name="item3" class="form-control  @error('item3') is-invalid @enderror" id="item3">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item3')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="item4"></label>
                <label for="item4">Sikap kerja (Komitmen)</label>
                <select name="item4" class="form-control  @error('item4') is-invalid @enderror" id="item4">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item4')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <h5>Ceritakan secara singkat kesibukan apa yang dilakukan di kampus?</h5>
            <div class="form-group">
                <label class="form-label" for="item5"></label>
                <label for="item5">Sikap kerja (Tanggung jawab)</label>
                <select name="item5" class="form-control  @error('item5') is-invalid @enderror" id="item5">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item5')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="item6"></label>
                <label for="item6">Penguasaan diri (Adaptasi)</label>
                <select name="item6" class="form-control  @error('item6') is-invalid @enderror" id="item6">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item6')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <h5>Ceritakan kegiatan di luar kampus yang Anda ikuti</h5>
            <div class="form-group">
                <label class="form-label" for="item7"></label>
                <label for="item7">Penguasaan diri (Manajemen waktu)</label>
                <select name="item7" class="form-control  @error('item7') is-invalid @enderror" id="item7">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item7')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <h5>Ceritakan pengalaman bekerja dalam tim/individu. Ceritakan juga terkait bekerja dengan seseorang yang berbeda kepribadian</h5>
            <div class="form-group">
                <label class="form-label" for="item8"></label>
                <label for="item8">Social Skill (Kerjasama)</label>
                <select name="item8" class="form-control  @error('item8') is-invalid @enderror" id="item8">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item8')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="item9"></label>
                <label for="item9">Social Skill (Membangun relasi)</label>
                <select name="item9" class="form-control  @error('item9') is-invalid @enderror" id="item9">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item9')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="item10"></label>
                <label for="item10">Sikap kerja (Integritas)</label>
                <select name="item10" class="form-control  @error('item10') is-invalid @enderror" id="item10">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item10')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="item11"></label>
                <label for="item11">Social Skill (Pelayanan)</label>
                <select name="item11" class="form-control  @error('item11') is-invalid @enderror" id="item11">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item11')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="item12"></label>
                <label for="item12">Social Skill (Komunikasi kerja)</label>
                <select name="item12" class="form-control  @error('item12') is-invalid @enderror" id="item12">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item12')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <h5>Jelaskan kelemahan terbesar yang Anda miliki. Bagaimana Anda mengendalikannya ?</h5>
            <div class="form-group">
                <label class="form-label" for="item13"></label>
                <label for="item13">Kognitif (Penyelesaian masalah)</label>
                <select name="item13" class="form-control  @error('item13') is-invalid @enderror" id="item13">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item13')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <h5>Jelaskan kelebihan Anda. Bagaimana dampak kelebihan tersebut dalam berkegiatan?</h5>
            <div class="form-group">
                <label class="form-label" for="item14"></label>
                <label for="item14">Kognitif (Berpikir inovatif)</label>
                <select name="item14" class="form-control  @error('item14') is-invalid @enderror" id="item14">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item14')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="item15"></label>
                <label for="item15">Penguasaan diri (Kepercayaan diri)</label>
                <select name="item15" class="form-control  @error('item15') is-invalid @enderror" id="item15">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item15')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <h5>Ceritakan pencapaian yang membuat Anda bangga/pencapaian terbesar yang telah anda lalui.</h5>
            <div class="form-group">
                <label class="form-label" for="item16"></label>
                <label for="item16">Social Skill (Public speaking)</label>
                <select name="item16" class="form-control  @error('item16') is-invalid @enderror" id="item16">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item16')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="item17"></label>
                <label for="item17">Penguasaan diri (Kepemimpinan)</label>
                <select name="item17" class="form-control  @error('item17') is-invalid @enderror" id="item17">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item17')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <h5>Kapan anda meminta bantuan saat mengalami kesulitan? Berikan contoh konkrit melalui kisah yang telah Anda lalui</h5>
            <div class="form-group">
                <label class="form-label" for="item18"></label>
                <label for="item18">Penguasaan diri (Manajemen konflik)</label>
                <select name="item18" class="form-control  @error('item18') is-invalid @enderror" id="item18">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item18')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="item19"></label>
                <label for="item19">Penguasaan diri (Manajemen resiko)</label>
                <select name="item19" class="form-control  @error('item19') is-invalid @enderror" id="item19">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item19')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="item20"></label>
                <label for="item20">Penguasaan diri (Resilience)</label>
                <select name="item20" class="form-control  @error('item20') is-invalid @enderror" id="item20">
                    <option value="">Pilih Nilai</option>
                    @for($i=0; $i<=4; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @error('item20')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="card-footer text-right">
            <button type="reset" class="btn btn-danger m-2">Reset</button>
            <button type="button" class="btn btn-primary" id="btn3">Submit</button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    $('#btn3').click(function(){
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