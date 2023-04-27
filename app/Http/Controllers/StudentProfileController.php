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
        
        return view('pages.mahasiswa.studentprofile.index',[
            'item'=>$item
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.mahasiswa.studentprofile.create');
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
            'prodi' =>'required|max:255|in:D3,D4',
            'jalur_masuk' =>'required|max:255',
            'beasiswa' =>'required|max:255',
            'pendapatan' =>'required|max:255',
            'saku' =>'required|max:255',
            'ip' => 'nullable|numeric|max:255',
            'ipk' => 'nullable|numeric|max:255'
        ]);
        
        $data = [
            'user_id' => $userid,
            'npm'=> $request->npm,
            'jurusan'=> $request->jurusan,
            'prodi'=> $request->prodi,
            'jalur_masuk'=> $request->jalur_masuk,
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

        return view('pages.mahasiswa.studentprofile.edit', [
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
            'npm' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'prodi' => 'required|max:255|in:D3,D4',
            'jalur_masuk' => 'required|max:255',
            'beasiswa' => 'required|max:255',
            'pendapatan' => 'required|max:255',
            'saku' => 'required|max:255',
            'ip' => 'nullable|numeric|max:255',
            'ipk' => 'nullable|numeric|max:255'
        ]);

        $data = [
            'user_id' => $userid,
            'npm' => $request->npm,
            'jurusan' => $request->jurusan,
            'prodi' => $request->prodi,
            'jalur_masuk' => $request->jalur_masuk,
            'beasiswa' => $request->beasiswa,
            'pendapatan_orangtua' => $request->pendapatan,
            'uang_saku_satu_bulan' => $request->saku,
            'index_prestasi' => $request->ip,
            'index_prestasi_kumulatif' => $request->ipk,
            'status' => $request->status
        ];

        $studentprofile->update($data);

        return redirect('studentprofile/')->with('toast', 'showToast("Data berhasil diupdate")');
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
