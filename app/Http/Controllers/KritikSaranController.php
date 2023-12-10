<?php

namespace App\Http\Controllers;

use App\Models\KritikSaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KritikSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $data = KritikSaran::where('user_id', Auth::user()->id)->get();
        return view('user.kritiksaran', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        $model = new KritikSaran;
        return view('user.kritiksaran', compact('model'));
    }

    /**
     * Store a newly created resource in storage.

     */
    public function store(Request $request)
    {
        $model = new KritikSaran;
        $model->user_id = Auth::user()->id;
        $model->username = $request->username;
        $model->name = $request->name;
        $model->deskripsi = $request->deskripsi;
        // dd($request->all());
        $model->save();

        return redirect('userkritiksaran');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *

     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *

     */
    public function destroy($id)
    {
        $model = KritikSaran::find($id);
        $model->delete();
        return redirect('userkritiksaran');
    }
}