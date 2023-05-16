<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelfAssessment;
use App\Models\SelfAssessmentTwo;
use App\Models\SelfAssessmentJobs;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class SelfAssessmentController extends Controller
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

        $item = SelfAssessment::where('user_id',$userid)->first();
        return view('pages.mahasiswa.selfassessment.index',[
            'item'=>$item
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.mahasiswa.selfassessment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userid = auth()->user()->id;

        $request->validate([
        'pilih1' => 'required|max:255', 
        'pilih2' => 'required|max:255', 
        'pilih3' => 'required|max:255', 
        'pilih4' => 'required|max:255', 
        'pilih5' => 'required|max:255', 
        'pilih6' => 'required|max:255', 
        'pilih7' => 'required|max:255', 
        'pilih8' => 'required|max:255', 
        'pilih9' => 'required|max:255', 
        'pilih10' => 'required|max:255',
        'pilih11' => 'required|max:255',
        'pilih12' => 'required|max:255',
        'pilih13' => 'required|max:255',
        'pilih14' => 'required|max:255',
        'pilih15' => 'required|max:255',
        'pilih16' => 'required|max:255',
        'pilih17' => 'required|max:255',
        'pilih18' => 'required|max:255',
        'pilih19' => 'required|max:255',
        'pilih20' => 'required|max:255', 
        'pilih21' => 'required|max:255',
        'pilih22' => 'required|max:255',
        'pilih23' => 'required|max:255',
        'pilih24' => 'required|max:255',
        'pilih25' => 'required|max:255',
        'pilih26' => 'required|max:255',
        'pilih27' => 'required|max:255',
        'pilih28' => 'required|max:255',
        'pilih29' => 'required|max:255',
        'pilih30' => 'required|max:255',
        'pilih31' => 'required|max:255',
        'pilih32' => 'required|max:255',
        'pilih33' => 'required|max:255',
        'pilih34' => 'required|max:255',
        'pilih35' => 'required|max:255',
        'pilih36' => 'required|max:255',
        'pilih37' => 'required|max:255',
        'pilih38' => 'required|max:255',
        'pilih39' => 'required|max:255',
        'pilih40' => 'required|max:255',
        'pilih41' => 'required|max:255',
        'pilih42' => 'required|max:255',
        'pilih43' => 'required|max:255',
        'pilih44' => 'required|max:255',
        'pilih45' => 'required|max:255',
        'pilih46' => 'required|max:255',
        'pilih47' => 'required|max:255',
        'pilih48' => 'required|max:255',
        'pilih49' => 'required|max:255',
        'pilih50' => 'required|max:255',
        'pilih51' => 'required|max:255',
        'pilih52' => 'required|max:255',
        'pilih53' => 'required|max:255',
        'pilih54' => 'required|max:255',
        'pilih55' => 'required|max:255',
        'pilih56' => 'required|max:255',
        'pilih57' => 'required|max:255',
        'pilih58' => 'required|max:255',
        'pilih59' => 'required|max:255',
        'pilih60' => 'required|max:255',
        'pilih61' => 'required|max:255',
        'pilih62' => 'required|max:255',
        'pilih63' => 'required|max:255',
        'pilih64' => 'required|max:255',
        'pilih65' => 'required|max:255',
        'pilih66' => 'required|max:255',
        'pilih67' => 'required|max:255',
        'pilih68' => 'required|max:255',
        'pilih69' => 'required|max:255',
        'pilih70' => 'required|max:255',
        'pilih71' => 'required|max:255',
        'pilih72' => 'required|max:255',
        'pilih73' => 'required|max:255',
        'pilih74' => 'required|max:255',
        'pilih75' => 'required|max:255',
        'pilih76' => 'required|max:255',
        'pilih77' => 'required|max:255',
        'pilih78' => 'required|max:255',
        'pilih79' => 'required|max:255',
        'pilih80' => 'required|max:255',
        'pilih81' => 'required|max:255',
        'pilih82' => 'required|max:255',
        'pilih83' => 'required|max:255',
        'pilih84' => 'required|max:255',
        'pilih85' => 'required|max:255',
        'pilih86' => 'required|max:255',
        'pilih87' => 'required|max:255',
        'pilih88' => 'required|max:255',
        'pilih89' => 'required|max:255',
        'pilih90' => 'required|max:255',
        'pilih91' => 'required|max:255',
        'pilih92' => 'required|max:255',
        'pilih93' => 'required|max:255',
        'pilih94' => 'required|max:255',
        'pilih95' => 'required|max:255',
        'pilih96' => 'required|max:255',
        'pilih97' => 'required|max:255',
        'pilih98' => 'required|max:255',
        'pilih99' => 'required|max:255',
        'pilih100' => 'required|max:255',
        ]);

        function dataPlus($a,$b,$c,$d,$e){
            $res = $a+$b+$c+$d+$e;
            if($res>=4){
                return 4;
            }else{
                return $res;
            }
        }

        function reqPlus($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t){
            $res = ($a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l+$m+$n+$o+$p+$q+$r+$s+$t)/20;
            return $res;
        }

        $req1 = dataPlus($request->pilih1, $request->pilih2, $request->pilih3, $request->pilih4, $request->pilih5);
        $req2 = dataPlus($request->pilih6, $request->pilih7, $request->pilih8, $request->pilih9, $request->pilih10);
        $req3 = dataPlus($request->pilih11, $request->pilih12, $request->pilih13, $request->pilih14, $request->pilih15);
        $req4 = dataPlus($request->pilih16, $request->pilih17, $request->pilih18, $request->pilih19, $request->pilih20);
        $req5 = dataPlus($request->pilih21, $request->pilih22, $request->pilih23, $request->pilih24, $request->pilih25);
        $req6 = dataPlus($request->pilih26, $request->pilih27, $request->pilih28, $request->pilih29, $request->pilih30);
        $req7 = dataPlus($request->pilih31, $request->pilih32, $request->pilih33, $request->pilih34, $request->pilih35);
        $req8 = dataPlus($request->pilih36, $request->pilih37, $request->pilih38, $request->pilih39, $request->pilih40);
        $req9 = dataPlus($request->pilih41, $request->pilih42, $request->pilih43, $request->pilih44, $request->pilih45);
        $req10 = dataPlus($request->pilih46, $request->pilih47, $request->pilih48, $request->pilih49, $request->pilih50);
        $req11 = dataPlus($request->pilih51, $request->pilih52, $request->pilih53, $request->pilih54, $request->pilih55);
        $req12 = dataPlus($request->pilih56, $request->pilih57, $request->pilih58, $request->pilih59, $request->pilih60);
        $req13 = dataPlus($request->pilih61, $request->pilih62, $request->pilih63, $request->pilih64, $request->pilih65);
        $req14 = dataPlus($request->pilih66, $request->pilih67, $request->pilih68, $request->pilih69, $request->pilih70);
        $req15 = dataPlus($request->pilih71, $request->pilih72, $request->pilih73, $request->pilih74, $request->pilih75);
        $req16 = dataPlus($request->pilih76, $request->pilih77, $request->pilih78, $request->pilih79, $request->pilih80);
        $req17 = dataPlus($request->pilih81, $request->pilih82, $request->pilih83, $request->pilih84, $request->pilih85);
        $req18 = dataPlus($request->pilih86, $request->pilih87, $request->pilih88, $request->pilih89, $request->pilih90);
        $req19 = dataPlus($request->pilih91, $request->pilih92, $request->pilih93, $request->pilih94, $request->pilih95);
        $req20 = dataPlus($request->pilih96, $request->pilih97, $request->pilih98, $request->pilih99, $request->pilih100);
        $reqratarata = reqPlus($req1, $req2, $req3, $req4, $req5, $req6, $req7, $req8, $req9, $req10, $req11, $req12, $req13, $req14, $req15, $req16, $req17, $req18, $req19, $req20) ;

        $data = [
            'user_id' => $userid,
            'kat1_var1'=>$req1,
            'kat1_var2'=>$req2,
            'kat1_var3'=>$req3,
            'kat1_var4'=>$req4,
            'kat1_var5'=>$req5,
            'kat1_var6'=>$req6,
            'kat2_var7'=>$req7,
            'kat2_var8'=>$req8,
            'kat2_var9'=>$req9,
            'kat2_var10'=>$req10,
            'kat3_var11'=>$req11,
            'kat3_var12'=>$req12,
            'kat3_var13'=>$req13,
            'kat3_var14'=>$req14,
            'kat3_var15'=>$req15,
            'kat3_var16'=>$req16,
            'kat3_var17'=>$req17,
            'kat4_var18'=>$req18,
            'kat4_var19'=>$req19,
            'kat4_var20'=>$req20,
            'rata_rata'=>$reqratarata,
        ];

        SelfAssessment::create($data);

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

        // return view('pages.mahasiswa.selfassessment.edit', [
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
