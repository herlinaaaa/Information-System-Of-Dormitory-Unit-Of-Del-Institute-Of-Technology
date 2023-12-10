<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renungan;

class RenunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $data = Renungan::all();
        return view('admin.renungan.renungan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $model = new Renungan;
        return view('admin.renungan.renungan', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Renungan;
        $model->date = $request->date;
        $model->ayatpagi = $request->ayatpagi;
        $model->linkpagi = $request->linkpagi;
        $model->ayatmalam = $request->ayatmalam;
        $model->save();

        return redirect('renungan');
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
        $model = Renungan::find($id);
        return view('admin.renungan.renunganedit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $model = Renungan::find($id);
        $model->date = $request->date;
        $model->ayatpagi = $request->ayatpagi;
        $model->linkpagi = $request->linkpagi;
        $model->ayatmalam = $request->ayatmalam;
        $model->save();

        return redirect('renungan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = Renungan::find($id);
        $model->delete();
        return redirect('renungan');
    }

    //user controller
    public function indexuser()
    {
        $renungans = Renungan::all();
        // dd($renungans);
        return view('user.renungan', compact('renungans'));
    }
}