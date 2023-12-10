<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KurveyMassal;

class KurveMassalController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $data = KurveyMassal::all();
        return view('admin.kurvey.kurvemassal', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        $model = new KurveyMassal;
        return view('admin.kurvey.kurvemassal', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {
        $model = new KurveyMassal;
        $model->prodi3 = $request->prodi3;
        $model->angkatan = $request->angkatan;
        $model->lokasi = $request->lokasi;
        $model->save();

        return redirect('kurvemassal');
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
        $model = KurveyMassal::find($id);
        return view('admin.kurvey.kurveymassaledit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $model = KurveyMassal::find($id);
        $model->prodi3 = $request->prodi3;
        $model->angkatan = $request->angkatan;
        $model->lokasi = $request->lokasi;
        $model->save();

        return redirect('kurvemassal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = KurveyMassal::find($id);
        $model->delete();
        return redirect('kurvemassal');
    }

    //user controller
    public function indexuser()
    {
        $data = KurveyMassal::all();
        return view('user.kurvemassal', compact('data'));
    }
}