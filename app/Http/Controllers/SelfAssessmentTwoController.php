<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\StudentProfile;
use App\Models\SelfAssessmentTwo;
use App\Models\SelfAssessmentJobs;
use Yajra\DataTables\Facades\DataTables;

class SelfAssessmentTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userid = auth()->user()->id;

        if ($request->ajax()) {
            $query = SelfAssessmentJobs::get();
            return DataTables::of($query)->make();
        }
        $cek = StudentProfile::where('user_id', $userid)->first();

        if(!$cek){
            $max=0;
        }else{
            if($cek->prodi == 'D3'){
                $max = "6";
            }else if($cek->prodi=='D4'){
                $max = "8";
            }
        }

        $item = Activity::where([
            ['user_id', $userid],
            ['semester', $max],
            ['status','allow']
        ])->first();

        
        $item2 = SelfAssessmentTwo::where('user_id', $userid)->first();

        return view('pages.mahasiswa.selfassessmenttwo.index', [
            'item' => $item2,
            'item2' => $item
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.mahasiswa.selfassessmenttwo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userid = auth()->user()->id;

        $request->validate([
            'pilih21' => 'required|max:255',
            'pilih22' => 'required|max:255',
            'pilih23' => 'required|max:255',
            'pilih24' => 'required|max:255',
            'pilih25' => 'required|max:255',
            'pilih26' => 'required|max:255',
            'pilih27' => 'required|max:255',
            'pilih28' => 'required|max:255',
            'pilih29' => 'required|max:255',
            'pilih210' => 'required|max:255',
            'pilih211' => 'required|max:255',
            'pilih212' => 'required|max:255',
            'pilih213' => 'required|max:255',
            'pilih214' => 'required|max:255',
            'pilih215' => 'required|max:255',
            'pilih216' => 'required|max:255',
            'pilih217' => 'required|max:255',
            'pilih218' => 'required|max:255',
            'pilih219' => 'required|max:255',
            'pilih220' => 'required|max:255',
            'pilih221' => 'required|max:255',
            'pilih222' => 'required|max:255',
            'pilih223' => 'required|max:255',
            'pilih224' => 'required|max:255',
            'pilih225' => 'required|max:255',
            'pilih226' => 'required|max:255',
            'pilih227' => 'required|max:255',
            'pilih228' => 'required|max:255',
            'pilih229' => 'required|max:255',
            'pilih230' => 'required|max:255',
            'pilih231' => 'required|max:255',
            'pilih232' => 'required|max:255',
            'pilih233' => 'required|max:255',
            'pilih234' => 'required|max:255',
            'pilih235' => 'required|max:255',
            'pilih236' => 'required|max:255',
            'pilih237' => 'required|max:255',
            'pilih238' => 'required|max:255',
            'pilih239' => 'required|max:255',
            'pilih240' => 'required|max:255',
            'pilih241' => 'required|max:255',
            'pilih242' => 'required|max:255',
            'pilih243' => 'required|max:255',
            'pilih244' => 'required|max:255',
            'pilih245' => 'required|max:255',
            'pilih246' => 'required|max:255',
            'pilih247' => 'required|max:255',
            'pilih248' => 'required|max:255',
            'pilih249' => 'required|max:255',
            'pilih250' => 'required|max:255',
            'pilih251' => 'required|max:255',
            'pilih252' => 'required|max:255',
            'pilih253' => 'required|max:255',
            'pilih254' => 'required|max:255',
            'pilih255' => 'required|max:255',
            'pilih256' => 'required|max:255',
            'pilih257' => 'required|max:255',
            'pilih258' => 'required|max:255',
            'pilih259' => 'required|max:255',
            'pilih260' => 'required|max:255',
            'pilih261' => 'required|max:255',
            'pilih262' => 'required|max:255',
            'pilih263' => 'required|max:255',
            'pilih264' => 'required|max:255',
            'pilih265' => 'required|max:255',
            'pilih266' => 'required|max:255',
            'pilih267' => 'required|max:255',
            'pilih268' => 'required|max:255',
            'pilih269' => 'required|max:255',
            'pilih270' => 'required|max:255',
            'pilih271' => 'required|max:255',
            'pilih272' => 'required|max:255',
            'pilih273' => 'required|max:255',
            'pilih274' => 'required|max:255',
            'pilih275' => 'required|max:255',
            'pilih276' => 'required|max:255',
            'pilih277' => 'required|max:255',
            'pilih278' => 'required|max:255',
            'pilih279' => 'required|max:255',
            'pilih280' => 'required|max:255',
            'pilih281' => 'required|max:255',
            'pilih282' => 'required|max:255',
            'pilih283' => 'required|max:255',
            'pilih284' => 'required|max:255',
            'pilih285' => 'required|max:255',
            'pilih286' => 'required|max:255',
            'pilih287' => 'required|max:255',
            'pilih288' => 'required|max:255',
            'pilih289' => 'required|max:255',
            'pilih290' => 'required|max:255',
            'pilih291' => 'required|max:255',
            'pilih292' => 'required|max:255',
            'pilih293' => 'required|max:255',
            'pilih294' => 'required|max:255',
            'pilih295' => 'required|max:255',
            'pilih296' => 'required|max:255',
            'pilih297' => 'required|max:255',
            'pilih298' => 'required|max:255',
            'pilih299' => 'required|max:255',
            'pilih2100' => 'required|max:255',
        ]);

        function dataPlus2($a, $b, $c, $d, $e)
        {
            $res = $a + $b + $c + $d + $e;
            if ($res >= 4) {
                return 4;
            } else {
                return $res;
            }
        }

        function reqPlus2($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o, $p, $q, $r, $s, $t)
        {
            $res = ($a + $b + $c + $d + $e + $f + $g + $h + $i + $j + $k + $l + $m + $n + $o + $p + $q + $r + $s + $t) / 20;
            return $res;
        }

        $req1 = dataPlus2($request->pilih21, $request->pilih22, $request->pilih23, $request->pilih24, $request->pilih25);
        $req2 = dataPlus2($request->pilih26, $request->pilih27, $request->pilih28, $request->pilih29, $request->pilih210);
        $req3 = dataPlus2($request->pilih211, $request->pilih212, $request->pilih213, $request->pilih214, $request->pilih215);
        $req4 = dataPlus2($request->pilih216, $request->pilih217, $request->pilih218, $request->pilih219, $request->pilih220);
        $req5 = dataPlus2($request->pilih221, $request->pilih222, $request->pilih223, $request->pilih224, $request->pilih225);
        $req6 = dataPlus2($request->pilih226, $request->pilih227, $request->pilih228, $request->pilih229, $request->pilih230);
        $req7 = dataPlus2($request->pilih231, $request->pilih232, $request->pilih233, $request->pilih234, $request->pilih235);
        $req8 = dataPlus2($request->pilih236, $request->pilih237, $request->pilih238, $request->pilih239, $request->pilih240);
        $req9 = dataPlus2($request->pilih241, $request->pilih242, $request->pilih243, $request->pilih244, $request->pilih245);
        $req10 = dataPlus2($request->pilih246, $request->pilih247, $request->pilih248, $request->pilih249, $request->pilih250);
        $req11 = dataPlus2($request->pilih251, $request->pilih252, $request->pilih253, $request->pilih254, $request->pilih255);
        $req12 = dataPlus2($request->pilih256, $request->pilih257, $request->pilih258, $request->pilih259, $request->pilih260);
        $req13 = dataPlus2($request->pilih261, $request->pilih262, $request->pilih263, $request->pilih264, $request->pilih265);
        $req14 = dataPlus2($request->pilih266, $request->pilih267, $request->pilih268, $request->pilih269, $request->pilih270);
        $req15 = dataPlus2($request->pilih271, $request->pilih272, $request->pilih273, $request->pilih274, $request->pilih275);
        $req16 = dataPlus2($request->pilih276, $request->pilih277, $request->pilih278, $request->pilih279, $request->pilih280);
        $req17 = dataPlus2($request->pilih281, $request->pilih282, $request->pilih283, $request->pilih284, $request->pilih285);
        $req18 = dataPlus2($request->pilih286, $request->pilih287, $request->pilih288, $request->pilih289, $request->pilih290);
        $req19 = dataPlus2($request->pilih291, $request->pilih292, $request->pilih293, $request->pilih294, $request->pilih295);
        $req20 = dataPlus2($request->pilih296, $request->pilih297, $request->pilih298, $request->pilih299, $request->pilih2100);
        $reqratarata = reqPlus2($req1, $req2, $req3, $req4, $req5, $req6, $req7, $req8, $req9, $req10, $req11, $req12, $req13, $req14, $req15, $req16, $req17, $req18, $req19, $req20);

        $data = [
            'user_id' => $userid,
            'kat1_var1' => $req1,
            'kat1_var2' => $req2,
            'kat1_var3' => $req3,
            'kat1_var4' => $req4,
            'kat1_var5' => $req5,
            'kat1_var6' => $req6,
            'kat2_var7' => $req7,
            'kat2_var8' => $req8,
            'kat2_var9' => $req9,
            'kat2_var10' => $req10,
            'kat3_var11' => $req11,
            'kat3_var12' => $req12,
            'kat3_var13' => $req13,
            'kat3_var14' => $req14,
            'kat3_var15' => $req15,
            'kat3_var16' => $req16,
            'kat3_var17' => $req17,
            'kat4_var18' => $req18,
            'kat4_var19' => $req19,
            'kat4_var20' => $req20,
            'rata_rata' => $reqratarata,
        ];

        SelfAssessmentTwo::create($data);

        return redirect('selfassessment')->with('toast', 'showToast("Data berhasil disimpan")');
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
        // $item = SelfAssessment::findOrFail($id);

        // return view('pages.mahasiswa.selfassessmenttwo.edit', [
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
        // $selfassessment = SelfAssessment::findOrFail($id);
        // $selfassessment->delete();

        // return redirect()->back()->with('toast', 'showToast("Data berhasil dihapus")');
    }
}
