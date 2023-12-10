<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use App\Models\DormMate;


class DormMateController extends Controller
{

    public function index()
    {
        $data = DormMate::all();
        $rusun1 = DormMate::where('asrama', 'rusun 1')->count();
        $rusun2 = DormMate::where('asrama', 'rusun 2')->count();
        $rusun3 = DormMate::where('asrama', 'rusun 3')->count();
        $rusun4 = DormMate::where('asrama', 'rusun 4')->count();
        $pniel = DormMate::where('asrama', 'pniel')->count();
        $silo = DormMate::where('asrama', 'silo')->count();
        $kapernaum = DormMate::where('asrama', 'kapernaum')->count();
        $dantob = DormMate::where('asrama', 'danau toba')->count();
        $profiles = Profil::all();
        return view('admin.dormmate.matedorm', compact('data', 'profiles', 'rusun1', 'rusun2', 'rusun3', 'rusun4', 'pniel', 'silo', 'kapernaum', 'dantob'));
    }


    public function create()
    {
        $model = new DormMate;
        return view('admin.dormmate.matedorm', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_nim' => 'required',
            'gender' => 'required',
            'asrama' => 'required|in:Rusun 1,Rusun 2,Rusun 3,Rusun 4,Pniel,Silo,Kapernaum,Danau Toba',
            'kamar' => 'required',
        ]);

        // dd($request);
        $dormmate = new DormMate();
        $dormmate->user_nim = $request->user_nim;
        $dormmate->gender = $request->gender;
        $dormmate->asrama = $request->asrama;
        $dormmate->kamar = $request->kamar;
        $dormmate->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = DormMate::find($id);
        return view('admin.dormmate.matedormedit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_nim' => 'required',
            'gender' => 'required',
            'asrama' => 'required|in:Rusun 1,Rusun 2,Rusun 3,Rusun 4,Pniel,Silo,Kapernaum,Danau Toba',
            'kamar' => 'required',
        ]);

        $dormmate = DormMate::findOrFail($id);
        $dormmate->user_nim = $request->user_nim;
        $dormmate->gender = $request->gender;
        $dormmate->asrama = $request->asrama;
        $dormmate->kamar = $request->kamar;
        $dormmate->save();

        return redirect('matedorm')->with('success', 'Data berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = DormMate::find($id);
        $model->delete();
        return redirect('matedorm');
    }

    //user controller
    public function alldata1()
    {
        $data = DormMate::where('asrama', 'Rusun 1')->get();
        return view('user.kamarrusun1', compact('data'));
    }
    public function lihat1()
    {
        $data = DormMate::where('asrama', 'Rusun 1')->get();
        return view('kamarrusun1', compact('data'));
    }
    public function alldata4()
    {
        $data = DormMate::where('asrama', 'Danau Toba')->get();
        return view('user.kamarrusun4', compact('data'));
    }

    public function index2()
    {
        $data = DormMate::where('asrama', 'Rusun 2')->get();
        return view('user.kamarrusun2', compact('data'));
    }
    public function lihat2()
    {
        $data = DormMate::where('asrama', 'Rusun 2')->get();
        return view('kamarrusun2', compact('data'));
    }

    public function index3()
    {
        $data = DormMate::where('asrama', 'Rusun 3')->get();
        return view('user.kamarrusun3', compact('data'));
    }

    public function lihat3()
    {
        $data = DormMate::where('asrama', 'Rusun 3')->get();
        return view('kamarrusun3', compact('data'));
    }
    public function lihat4()
    {
        $data = DormMate::where('asrama', 'Danau Toba')->get();
        return view('kamarrusun4', compact('data'));
    }

    public function indexdt()
    {
        $data = DormMate::where('asrama', 'Danau Toba')->get();
        return view('user.kamardantob', compact('data'));
    }

    public function lihatdt()
    {
        $data = DormMate::where('asrama', 'Danau Toba')->get();
        return view('kamardantob', compact('data'));
    }

    public function indexk()
    {
        $data = DormMate::where('asrama', 'Kapernaum')->get();
        return view('user.kamarkapernaum', compact('data'));
    }

    public function lihatk()
    {
        $data = DormMate::where('asrama', 'Kapernaum')->get();
        return view('kamarkapernaum', compact('data'));
    }
    public function indexp()
    {
        $data = DormMate::where('asrama', 'Pniel')->get();
        return view('user.kamarpniel', compact('data'));
    }
    public function lihatp()
    {
        $data = DormMate::where('asrama', 'Pniel')->get();
        return view('kamarpniel', compact('data'));
    }

    public function indexs()
    {
        $data = DormMate::where('asrama', 'Silo')->get();
        return view('user.kamarsilo', compact('data'));
    }
    public function lihats()
    {
        $data = DormMate::where('asrama', 'Silo')->get();
        return view('kamarsilo', compact('data'));
    }
}
