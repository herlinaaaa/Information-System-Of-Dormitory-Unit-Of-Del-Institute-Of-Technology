<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use App\Models\KurveyHarian;

class KurveController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $data = KurveyHarian::orderBy('tugas', 'ASC')->get();
        $profiles = Profil::all();
        return view('admin.kurvey.kurvey', compact('data', 'profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        $model = new KurveyHarian;
        return view('admin.kurvey.kurvey', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {
        $request->validate([
            'user_nim' => 'required',
            'jadwal' => 'required|in:Senin,Selasa,Rabu,Kamis,Jumat',
            'tugas' => 'required',
            'asrama' => 'required',
        ]);

        $kurveharian = new KurveyHarian();
        $kurveharian->user_nim = $request->user_nim;
        $kurveharian->jadwal = $request->jadwal;
        $kurveharian->tugas = $request->tugas;
        $kurveharian->asrama = $request->asrama;
        $kurveharian->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    // public function store(Request $request)
    // {
    //     $nim = $request->input('nim');
    //     $profil = Profil::where('nim', $nim)->first();

    //     if ($profil) {
    //         $name = $profil->name;
    //         $prodi2 = $profil->prodi4;
    //         $asrama = $request->asrama;
    //         $kamar = $request->kamar;
    //     }

    //     $harian = KurveyHarian::create([
    //         'nim' => $nim,
    //         'name' => $name,
    //         'prodi2' => $prodi2,
    //         'asrama' => $asrama,
    //         'kamar' => $kamar,
    //     ]);

    //     return response()->json($harian, 201);
    // }

    /**
     * Display the specified resource.
     *

     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit($id)
    {
        $model = KurveyHarian::find($id);
        return view('admin.kurvey.kurveyedit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $model = KurveyHarian::find($id);
        $model->nim = $request->nim;
        $model->name = $request->name;
        $model->prodi2 = $request->prodi2;
        $model->kamar = $request->kamar;
        $model->jadwal = $request->jadwal;
        $model->tugas = $request->tugas;
        $model->asrama = $request->asrama;
        $model->save();

        return redirect('kurvey');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = KurveyHarian::find($id);
        $model->delete();
        return redirect('kurvey');
    }

    //user controller
    public function index1()
    {
        $data = KurveyHarian::where('asrama', 'Rusun 1')->get();
        return view('user.kurverusun1', compact('data'));
    }
    public function index2()
    {
        $data = KurveyHarian::where('asrama', 'Rusun 2')->get();
        return view('user.kurverusun2', compact('data'));
    }
    public function index3()
    {
        $data = KurveyHarian::where('asrama', 'Rusun 3')->get();
        return view('user.kurverusun3', compact('data'));
    }
    public function index4()
    {
        $data = KurveyHarian::where('asrama', 'Rusun 4')->get();
        return view('user.kurverusun4', compact('data'));
    }
    public function indexp()
    {
        $data = KurveyHarian::where('asrama', 'Pniel')->get();
        return view('user.kurvepniel', compact('data'));
    }
    public function indexs()
    {
        $data = KurveyHarian::where('asrama', 'Silo')->get();
        return view('user.kurvesilo', compact('data'));
    }
    public function indexk()
    {
        $data = KurveyHarian::where('asrama', 'Kapernaum')->get();
        return view('user.kurvekapernaum', compact('data'));
    }
    public function indexdt()
    {
        $data = KurveyHarian::where('asrama', 'Danau Toba')->get();
        return view('user.kurvedantob', compact('data'));
    }
}
