<?php

namespace App\Http\Controllers;

use App\Models\SelfAssessment;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SelfAssessmentTimpsikologController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = SelfAssessment::with('user')->get();
            return DataTables::of($query)->addColumn('name', function ($row) {
                return $row->user->name;
            })->make();
        }

        return view('pages.timpsikolog.selfassessment.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }
}
