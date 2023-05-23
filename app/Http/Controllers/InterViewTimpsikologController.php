<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InterViewTimpsikolog;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class InterViewTimpsikologController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = InterViewTimpsikolog::with('user')->get();
            return DataTables::of($query)->addColumn('name', function ($row) {
                return $row->user->name;
            })->make();
        }

        return view('pages.timpsikolog.interview.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = User::get();
        return view('pages.timpsikolog.interview.create',[
            'items'=>$items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'item1' => 'required|max:255',
            'item2' => 'required|max:255',
            'item3' => 'required|max:255',
            'item4' => 'required|max:255',
            'item5' => 'required|max:255',
            'item6' => 'required|max:255',
            'item7' => 'required|max:255',
            'item8' => 'required|max:255',
            'item9' => 'required|max:255',
            'item10' => 'required|max:255',
            'item11' => 'required|max:255',
            'item12' => 'required|max:255',
            'item13' => 'required|max:255',
            'item14' => 'required|max:255',
            'item15' => 'required|max:255',
            'item16' => 'required|max:255',
            'item17' => 'required|max:255',
            'item18' => 'required|max:255',
            'item19' => 'required|max:255',
            'item20' => 'required|max:255'
        ]);

        function reqPlus($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o, $p, $q, $r, $s, $t)
        {
            $res = ($a + $b + $c + $d + $e + $f + $g + $h + $i + $j + $k + $l + $m + $n + $o + $p + $q + $r + $s + $t) / 20;
            return $res;
        }

        $reqratarata = reqPlus($request->input1, $request->input2, $request->input3, $request->input4, $request->input5, $request->input6, $request->input7, $request->input8, $request->input9, $request->input10, $request->input11, $request->input12, $request->input13, $request->input14, $request->input15, $request->input16, $request->input17, $request->input18, $request->input19, $request->input20) ;

        $data = [
            'user_id' => $request->user_id,
            'kat1_var1' => $request->item1,
            'kat1_var2' => $request->item2,
            'kat1_var3' => $request->item3,
            'kat1_var4' => $request->item4,
            'kat1_var5' => $request->item5,
            'kat1_var6' => $request->item6,
            'kat2_var7' => $request->item7,
            'kat2_var8' => $request->item8,
            'kat2_var9' => $request->item9,
            'kat2_var10' => $request->item10,
            'kat3_var11' => $request->item11,
            'kat3_var12' => $request->item12,
            'kat3_var13' => $request->item13,
            'kat3_var14' => $request->item14,
            'kat3_var15' => $request->item15,
            'kat3_var16' => $request->item16,
            'kat3_var17' => $request->item17,
            'kat4_var18' => $request->item18,
            'kat4_var19' => $request->item19,
            'kat4_var20' => $request->item20,
            'rata_rata' => $reqratarata,
        ];

        InterViewTimpsikolog::create($data);

        return redirect('interview-timpsikolog')->with('toast', 'showToast("Data berhasil disimpan")');
    }

    /**
     * Display the specified resource.
     */
    public function show(InterViewTimpsikolog $interViewTimpsikolog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InterViewTimpsikolog $interViewTimpsikolog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InterViewTimpsikolog $interViewTimpsikolog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InterViewTimpsikolog $interViewTimpsikolog)
    {
        //
    }
}
