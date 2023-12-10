<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $data = Profil::all();
        return view('user.profil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        $model = new Profil;
        return view('user.profil', new Profil);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     */
    public function store(Request $request)
    {
        $model = new Profil;
        $model->user_id = Auth::user()->id;
        $model->username = $request->username;
        $model->name = $request->name;
        $model->nim = $request->nim;
        $model->gender = $request->gender;
        $model->prodi4 = $request->prodi4;
        $model->akt = $request->akt;
        $model->asrama = $request->asrama;
        $model->kamar = $request->kamar;
        // dd($request->all());
        $model->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *


     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *


     */
    public function edit($id)
    {
        $model = Profil::where('user_id', $id)->first();

        if (!$model) {
            return view('user.profil');
        }


        return view('user.profil', compact('model'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request


     */
    public function update(Request $request, $id)
    {
        $model = Profil::findOrFail($id);
        $model->username = $request->username;
        $model->name = $request->name;
        $model->nim = $request->nim;
        $model->gender = $request->gender;
        $model->prodi4 = $request->prodi4;
        $model->akt = $request->akt;
        $model->asrama = $request->asrama;
        $model->kamar = $request->kamar;
        $model->save();

        return back()->with('sukses', 'Berhasil');
    }


    /**
     * Remove the specified resource from storage.
     *


     */
    public function destroy($id)
    {
        $model = Profil::findOrFail($id);
        $model->delete();

        return redirect('profil');
    }

}