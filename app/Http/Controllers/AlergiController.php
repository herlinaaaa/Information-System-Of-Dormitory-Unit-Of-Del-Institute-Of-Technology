<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use App\Models\Alergi;
use Illuminate\Support\Facades\Auth;

class AlergiController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $data = Alergi::all();
        $profiles = Profil::all();
        return view('admin.datalergi.alergi', compact('data', 'profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $alergi = new Alergi;
        return view('admin.datalergi.alergi', compact('alergi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'user_nim' => 'required',
            'alergi' => 'array', // Pastikan input alergi merupakan array
        ]);

        $alergi = new Alergi;
        $alergi->user_nim = $request->user_nim;
        $alergi->alergi = implode(',', $request->alergi); // Mengubah array menjadi string dengan pemisah koma
        $alergi->save();

        // Kembalikan respon atau lakukan redirect
        return redirect()->back()->with('success', 'Data alergi berhasil disimpan');
    }




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
        $alergi = Alergi::findOrFail($id);
        $selectedAlergi = explode(',', $alergi->alergi);
        $profiles = Profil::all();

        $selectedAlergiArray = [];
        foreach ($selectedAlergi as $selected) {
            $selectedAlergiArray[$selected] = true;
        }

        return view('admin.datalergi.alergiedit', compact('alergi', 'selectedAlergiArray', 'profiles'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_nim' => 'required',
            'alergi' => 'array',
        ]);

        $alergi = Alergi::findOrFail($id);
        $alergi->user_nim = $request->user_nim;
        $alergi->alergi = implode(',', $request->alergi); // Mengubah array menjadi string dengan pemisah koma

        $alergi->save();

        return redirect('alergi')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = Alergi::find($id);
        $model->delete();
        return redirect('alergi');
    }

    //user controller
    public function alldata()
    {
        $data = Alergi::all();
        return view('user.alergi', compact('data'));
    }

    public function lihat()
    {
        $data = Alergi::all();
        return view('alergi-guest', compact('data'));
    }

    public function adddatauser()
    {
        $model = new Alergi;
        return view('user.tambahalergi', compact('model'));
    }

    public function simpanuser(Request $request)
    {
        $request->validate([
            'user_nim' => 'required',
            'alergi' => 'array', // Pastikan input alergi merupakan array
        ]);

        $file = $request->file('bukti');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile = public_path('/bukti');
        $file->move($tujuanFile, $namaFile);

        $model = new Alergi;
        $model->user_nim = $request->user_nim;
        $model->alergi = implode(',', $request->alergi);
        $model->bukti = $namaFile;
        $model->save();

        return redirect('alergic')->with('success', 'Berhasil');
    }


}