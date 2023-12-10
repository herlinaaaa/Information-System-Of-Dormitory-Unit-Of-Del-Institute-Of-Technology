<?php

namespace App\Http\Controllers;

use App\Models\KritikSaran;
use App\Models\Profil;
use Illuminate\Http\Request;

class KritikSaranAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $data = KritikSaran::all();
        $profiles = Profil::all();
        return view('admin.kritiksaran.kritiksaran', compact('data', 'profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {
        //
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
        return redirect('kritiksaran');
    }
}
