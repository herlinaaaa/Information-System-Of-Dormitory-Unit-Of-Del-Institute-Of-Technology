<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sakit;
use Illuminate\Support\Facades\Auth;

class SakitAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $data = Sakit::all();
        return view('admin.datasakit.sakit', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        $model = new Sakit;
        return view('admin.datasakit.sakit', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {

        $model = new Sakit;
        $model->user_id = Auth::user()->id;
        $model->username = $request->username;
        $model->name = $request->name;
        $model->kelas = $request->kelas;
        $model->date = $request->date;
        $model->pesan = $request->pesan;
        $model->penanganan = $request->penanganan;
        // dd($request->all());
        $model->save();

        return redirect('addsakit');

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
        $model = Sakit::find($id);
        return view('admin.datasakit.sakitedit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *

     */
    public function update(Request $request, $id)
    {
        $model = Sakit::find($id);
        $model->username = $request->username;
        $model->name = $request->name;
        $model->kelas = $request->kelas;
        $model->date = $request->date;
        $model->pesan = $request->pesan;
        $model->penanganan = $request->penanganan;

        $model->save();

        return redirect('addsakit');
    }

    /**
     * Remove the specified resource from storage.
     *

     */
    public function destroy($id)
    {
        $model = Sakit::find($id);
        $model->delete();
        return redirect('addsakit');
    }
}