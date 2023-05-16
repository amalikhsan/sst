<?php

namespace App\Http\Controllers;

use App\Models\InterViewQuota;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class InterViewQuotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = InterViewQuota::get();
            return DataTables::of($query)->make();
        }

        return view('pages.interviewquota.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.interviewquota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'quota' => $request->jumlahkuota
        ];

        InterViewQuota::create($data);

        return redirect('interviewquota')->with('toast', 'showToast("Data berhasil disimpan")');
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
        $item = InterViewQuota::findOrFail($id);

        return view('pages.interviewquota.edit', [
            'item'  =>  $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = InterViewQuota::findOrFail($id);

        $data = [
            'quota' => $request->jumlahkuota
        ];

        $item->update($data);

        return redirect('interviewquota')->with('toast', 'showToast("Data berhasil diupdate")');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = InterViewQuota::findOrFail($id);
        $item->delete();

        return redirect()->back()->with('toast', 'showToast("Data berhasil dihapus")');
    }
}
