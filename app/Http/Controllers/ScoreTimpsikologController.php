<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Activity;
use App\Models\InterViewTimpsikolog;
use Illuminate\Http\Request;
use App\Models\SelfAssessmentTwo;
use App\Models\StudentProfile;
use Yajra\DataTables\Facades\DataTables;

class ScoreTimpsikologController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = User::where('role','mahasiswa')->get();
            return DataTables::of($query)->make();
        }

        return view('pages.timpsikolog.score.index');
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
        $selfassessmenttwo = SelfAssessmentTwo::where('user_id', $id)->first();
        $activity = Activity::where('user_id', $id)->get();
        $interview = InterViewTimpsikolog::where('user_id', $id)->first();
        $studentprofile = StudentProfile::where('user_id', $id)->first();
        
        $hasilactivity='';
        if($selfassessmenttwo && $activity && $interview && $studentprofile) {
            if ($studentprofile->prodi == 'D3') {
                $max = "6";
            } else if ($studentprofile->prodi == 'D4') {
                $max = "8";
            }
            
            $activityscore=0;
            foreach ($activity as $act){
                $activityscore += $act->score;
            }

            if($activityscore>4){
                $activityscore2 = 4;
            }else{
                $activityscore2 = $activityscore;
            }

            $hasilactivity = $activityscore2/$max;
        }

        return view('pages.timpsikolog.score.show',[
            'selfassessmenttwo' => $selfassessmenttwo,
            'hasilactivity' => $hasilactivity,
            'interview' => $interview,
            'studentprofile' => $studentprofile,
        ]);
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
