<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ActivityValidator extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Activity::with('user')->get();
            return DataTables::of($query)->addColumn('name', function ($row) {
                return $row->user->name;
            })->make();
        }

        return view('pages.validator.activity.index');
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
        $item = Activity::findOrFail($id);

        return view('pages.validator.activity.edit', [
            'item'  =>  $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Activity = Activity::findOrFail($id);

        $request->validate([
            'status' => 'required|max:255'
        ]);

        if ($request->status == 'validasi') {
            $datas = 0;
            if ($Activity->bidang == 'Kompetisi') {
                if ($Activity->capaian == 'Juara 1 Perorangan') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 8;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 7.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 14;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 15;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 21;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 19.5;
                        }
                    }
                } else if ($Activity->capaian == 'Juara 2 Perorangan') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 4.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 4;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 7;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 6.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 12.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 11.5;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 19;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 17.5;
                        }
                    }
                } else if ($Activity->capaian == 'Juara 3 Perorangan') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 3.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 3;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 6;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 11;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 10;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 17;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 15.5;
                        }
                    }
                } else if ($Activity->capaian == 'Harapan 1 Perorangan') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 2.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 2;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 4.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 9.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 8.5;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 15;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 13.5;
                        }
                    }
                } else if ($Activity->capaian == 'Harapan 2 Perorangan') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 1.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 1;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 4;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 3.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 8;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 7;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 13;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 11.5;
                        }
                    }
                } else if ($Activity->capaian == 'Harapan 3 Perorangan') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 1;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0.5;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 3;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 2.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 6.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5.5;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 11;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 9.5;
                        }
                    }
                } else if ($Activity->capaian == 'Apresiasi Kejuaran Perorangan (Misal: Peserta terfavorit)') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0.25;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0.75;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 1.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 1;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 3;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 2;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 4;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 3;
                        }
                    }
                } else if ($Activity->capaian == 'Peserta Perorangan (non pemenang)') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0.1;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0.2;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0.75;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0.25;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 1.25;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0.75;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 2;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 1.5;
                        }
                    }
                } else if ($Activity->capaian == 'Juara 1 Beregu') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 7.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 7;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 12;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 11.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 18;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 17;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 25;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 23;
                        }
                    }
                } else if ($Activity->capaian == 'Juara 2 Beregu') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 6.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 6;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 10.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 10;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 16.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 15.5;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 23;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 21;
                        }
                    }
                } else if ($Activity->capaian == 'Juara 3 Beregu') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 9;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 8.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 15;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 14;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 21;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 19;
                        }
                    }
                } else if ($Activity->capaian == 'Harapan 1 Beregu') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 4.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 4;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 7.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 7;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 13.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 12.5;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 19;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 17;
                        }
                    }
                } else if ($Activity->capaian == 'Harapan 2 Beregu') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 3.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 3;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 6;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 12;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 11;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 17;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 15;
                        }
                    }
                } else if ($Activity->capaian == 'Harapan 3 Beregu') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 2.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 2;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 4.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 4;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 10.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 9.5;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 15;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 13;
                        }
                    }
                } else if ($Activity->capaian == 'Apresiasi Kejuaran Beregu (Misal: Peserta terfavorit)') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 1.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 1;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 2;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 1.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 3.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 2.5;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 4;
                        }
                    }
                } else if ($Activity->capaian == 'Peserta Beregu (non pemenang)') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0.75;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 1;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 1.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 1;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 2.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 2;
                        }
                    }
                }
            } else if ($Activity->bidang == 'Rekognisi/ Pengakuan') {
                if ($Activity->capaian == 'Juri/Pelatih/Wasit') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0.25;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 1.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 1;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 3;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 2.5;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 4.5;
                        }
                    }
                } else if ($Activity->capaian == 'Narasumber/pembicara/moderator') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0.25;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 1.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 1;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 3;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 2.5;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 4.5;
                        }
                    }
                } else if ($Activity->capaian == 'Peserta Kegiatan (Diksarlin, Seminar, webinar, workshop, dan sejenisnya)') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0.25;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0.1;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 1;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 2.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 2;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 4.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 4;
                        }
                    }
                }
            } else if ($Activity->bidang == 'Penghargaan') {
                if ($Activity->capaian == 'Medali Emas Perorangan') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 8;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 7.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 14;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 15;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 21;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 19.5;
                        }
                    }
                } else if ($Activity->capaian == 'Medali Perak Perorangan') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 4.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 4;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 7;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 6.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 12.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 11.5;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 19;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 17.5;
                        }
                    }
                } else if ($Activity->capaian == 'Medali Perunggu Perorangan') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 3.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 3;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 6;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 11;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 10;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 17;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 15.5;
                        }
                    }
                } else if ($Activity->capaian == 'Medali Emas Beregu') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 7.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 7;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 12;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 11.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 18;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 17;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 25;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 23;
                        }
                    }
                } else if ($Activity->capaian == 'Medali Perak Beregu') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 6.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 6;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 10.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 10;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 16.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 15.5;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 23;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 21;
                        }
                    }
                } else if ($Activity->capaian == 'Medali Perunggu Beregu') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 9;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 8.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 15;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 14;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 21;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 19;
                        }
                    }
                }
            } else if ($Activity->bidang == 'Organisasi') {
                if ($Activity->capaian == 'Ketua') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 8;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 7.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 14;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 15;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 21;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 19.5;
                        }
                    }
                } else if ($Activity->capaian == 'Wakil Ketua') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 4.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 4;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 7;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 6.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 12.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 11.5;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 19;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 17.5;
                        }
                    }
                } else if ($Activity->capaian == 'Sekertaris') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 3.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 3;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 6;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 11;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 10;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 17;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 15.5;
                        }
                    }
                } else if ($Activity->capaian == 'Bendahara') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 2.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 2;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 4.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 9.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 8.5;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 15;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 13.5;
                        }
                    }
                } else if ($Activity->capaian == 'Anggota') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0.1;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0.2;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0.75;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0.25;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 1.25;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0.75;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 2;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 1.5;
                        }
                    }
                }
            } else if ($Activity->bidang == 'Hasil Karya') {
                if ($Activity->capaian == 'Paten/ Merek yang HaKi kan') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 3;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 3;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5;
                        }
                    }
                } else if ($Activity->capaian == 'Cipta Karya Original') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 2;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 2;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 4;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 4;
                        }
                    }
                } else if ($Activity->capaian == 'Buku ber-ISBN') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 3;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 3;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5;
                        }
                    }
                } else if ($Activity->capaian == 'Penulis Utama/korespondensi karya ilmiah di journal yg bereputasi dan diakui') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 3;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 3;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5;
                        }
                    }
                } else if ($Activity->capaian == 'Penulis kedua (bukan korespondensi) dst karya ilmiah di journal yg bereputasi dan diakui') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 0;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 0;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 2;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 2;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 4;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 4;
                        }
                    }
                }
            } else if ($Activity->bidang == 'Pengabdian kepada Masyarakat dan Pemberdayaan atau Aksi Kemanusiaan') {
                if ($Activity->capaian == 'Pemrakarsa aksi kemanusiaan') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 8;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 7.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 14;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 15;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 21;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 19.5;
                        }
                    }
                } else if ($Activity->capaian == 'Koordinator aksi kemanusiaan') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 4.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 4;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 7;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 6.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 12.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 11.5;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 19;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 17.5;
                        }
                    }
                } else if ($Activity->capaian == 'Relawan') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 3.5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 3;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 6;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5.5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 11;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 10;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 17;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 15.5;
                        }
                    }
                }
            } else if ($Activity->bidang == 'Kewirausahaan') {
                if ($Activity->capaian == 'Memiliki Usaha ber NIB') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 10;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 10;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 10;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 10;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 10;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 10;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 10;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 10;
                        }
                    }
                } else if ($Activity->capaian == 'Memiliki Usaha tanpa NIB') {
                    if ($Activity->lingkup == 'Internal') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5;
                        }
                    } else if ($Activity->lingkup == 'Regional/Provinsi') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5;
                        }
                    } else if ($Activity->lingkup == 'Nasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5;
                        }
                    } else if ($Activity->lingkup == 'Internasional') {
                        if ($Activity->jumlah_peserta == '>= 10') {
                            $datas = 5;
                        } else if ($Activity->jumlah_peserta == '< 10') {
                            $datas = 5;
                        }
                    }
                }
            }
            $data = [
                'score' => $datas,
                'status' => $request->status
            ];
        } else {
            $data = [
                'score' => '',
                'status' => $request->status
            ];
        }

        $Activity->update($data);

        return redirect('activityreport-validator')->with('toast', 'showToast("Data berhasil diupdate")');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 
    }
}
