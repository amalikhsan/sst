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
        return view('pages.studentprofile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userid = auth()->user()->id;

        $request->validate([
            'bidang' => 'required|max:255',
            'capaian' => 'required|max:255',
            'lingkup' => 'required|max:255',
            'peserta' => 'required|max:255',
            'kegiatan' => 'required|max:255',
            'tglkegiatan' => 'required|max:255',
            'file-bukti' => 'required|mimetypes:application/pdf|max:10000'
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

        if ($request->hasFile('file-bukti')) {
            $data['bukti'] = $request->file('file-bukti')->store('file-bukti', 'public');
        }

        StudentProfile::create($data);

        return redirect('activity-create')->with('toast', 'showToast("Data berhasil disimpan")');
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

        return view('pages.activity.edit', [
            'item'  =>  $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Activity = StudentProfile::findOrFail($id);

        $userid = auth()->user()->id;

        $request->validate([
            'bidang' => 'required|max:255',
            'capaian' => 'required|max:255',
            'lingkup' => 'required|max:255',
            'peserta' => 'required|max:255',
            'kegiatan' => 'required|max:255',
            'tglkegiatan' => 'required|max:255',
            'file-bukti' => 'required|mimetypes:application/pdf|max:10000'
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
            $oldfile = $path . basename($Activity->avatar);
            Storage::disk('public')->delete($oldfile);
            $data['bukti'] = Storage::disk('public')->put($path, $request->file('file-bukti'));
        }

        $Activity->update($data);

        return redirect('activity-report/' . $id . '/edit')->with('toast', 'showToast("Data berhasil diupdate")');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Activity = StudentProfile::findOrFail($id);
        $Activity->delete();

        return redirect()->back()->with('toast', 'showToast("Data berhasil dihapus")');
    }
}
