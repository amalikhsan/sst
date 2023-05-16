<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\InterView;
use Illuminate\Http\Request;
use App\Models\InterviewQuota;
use App\Models\StudentProfile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class InterViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cek = Activity::with('user')->where('user_id', auth()->user()->id)->first();
        $cek2 = StudentProfile::with('user')->where('user_id', auth()->user()->id)->first();
        $item = InterView::with('user')->get();
        $item2 = InterView::with('user')->where('user_id',auth()->user()->id)->first();
        return view('pages.mahasiswa.interview.index',[
            'item' => $item,
            'item2'=>$item2,
            'cek'=>$cek,
            'cek2'=>$cek2
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.mahasiswa.interview.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userid = auth()->user()->id;

        $request->validate([
            'tanggal' => 'required|date|max:255'
        ]);

        $res = InterView::with('user')->where('tanggal_wawancara', $request->tanggal)->get();
        $quota = InterViewQuota::first();
        if($quota){
            if ($res->count() >= $quota->quota) {
                return redirect('interview')->with('toast', 'showToast2("Kuota pennuh, cari tanggal lain")');
            }
        }else{
            if($res->count() >= 20){
                return redirect('interview')->with('toast', 'showToast2("Kuota pennuh, cari tanggal lain")');
            }
        }

        $data = [
            'user_id' => $userid,
            'tanggal_wawancara' => $request->tanggal
        ];

        InterView::create($data);

        return redirect('interview')->with('toast', 'showToast("Data berhasil disimpan")');
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
        // $item = InterView::findOrFail($id);

        // return view('pages.mahasiswa.interview.edit', [
        //     'item'  =>  $item
        // ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $interview = InterView::findOrFail($id);
        // $interview->delete();

        // return redirect()->back()->with('toast', 'showToast("Data berhasil dihapus")');
    }
}
