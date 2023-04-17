<?php

namespace App\Http\Controllers;

use App\Models\StudentProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = StudentProfile::where('user_id',auth()->user()->id)->first();
        
        return view('pages.studentprofile.index',[
            'item'=>$item
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.studentprofile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userid = auth()->user()->id;
        
        $request->validate([
            'npm' =>'required|max:255',
            'jurusan' =>'required|max:255',
            'prodi' =>'required|max:255',
            'jalur_masuk' =>'required|max:255',
            'semester' =>'required|max:255',
            'beasiswa' =>'required|max:255',
            'pendapatan' =>'required|max:255',
            'saku' =>'required|max:255',
            'ip' => 'required|numeric|max:255',
            'ipk' => 'required|numeric|max:255'
        ]);
        
        $data = [
            'user_id' => $userid,
            'npm'=> $request->npm,
            'jurusan'=> $request->jurusan,
            'prodi'=> $request->prodi,
            'jalur_masuk'=> $request->jalur_masuk,
            'semester'=> $request->semester,
            'beasiswa'=> $request->beasiswa,
            'pendapatan_orangtua'=> $request->pendapatan,
            'uang_saku_satu_bulan'=> $request->saku,
            'index_prestasi'=> $request->ip,
            'index_prestasi_kumulatif'=> $request->ipk,
            'status'=> $request->status
        ];
        
        StudentProfile::create($data);

        return redirect('studentprofile')->with('toast', 'showToast("Data berhasil disimpan")');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = StudentProfile::findOrFail($id);

        return view('pages.studentprofile.edit', [
            'item'  =>  $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $studentprofile = StudentProfile::findOrFail($id);

        $userid = auth()->user()->id;

        $request->validate([
            'bidang' => 'required|max:255',
            'capaian' => 'required|max:255',
            'lingkup' => 'required|max:255',
            'peserta' => 'required|max:255',
            'kegiatan' => 'required|max:255',
            'tglkegiatan' => 'required|max:255',
            'file-bukti' => 'required|mimetypes:application/pdf|max:1000'
        ]);

        $data = [
            'user_id' => $userid,
            'bidang' => $request->bidang,
            'capaian' => $request->capaian,
            'lingkup' => $request->lingkup,
            'jumlah_peserta' => $request->peserta,
            'nama_kegiatan' => $request->kegiatan,
            'tanggal_kegiatan' => $request->tglkegiatan
        ];

        if ($request->hasFile('file-bukti') && $request->file('file-bukti')->isValid()) {
            $path = "file-bukti";
            $oldfile = $path . basename($studentprofile->avatar);
            Storage::disk('public')->delete($oldfile);
            $data['bukti'] = Storage::disk('public')->put($path, $request->file('file-bukti'));
        }

        $studentprofile->update($data);

        return redirect('studentprofile/' . $id . '/edit')->with('toast', 'showToast("Data berhasil diupdate")');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $studentprofile = StudentProfile::findOrFail($id);
        $studentprofile->delete();

        return redirect()->back()->with('toast', 'showToast("Data berhasil dihapus")');
    }
}
