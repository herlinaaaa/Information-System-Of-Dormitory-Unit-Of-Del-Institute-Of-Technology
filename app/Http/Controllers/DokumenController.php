<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.

     */
    public function index()
    {
        $data = Dokumen::all();
        return view('admin.datadokumen.datadok', compact('data'));
    }


    public function create()
    {
        $model = new Dokumen;
        return view('admin.datadokumen.datadok', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function simpan(Request $request){
    //     $this->validate($request, [
    //         'name_file' => 'required',
    //         'file' => 'mimes:doc,docx,pdf,xlsx,xls,ppt,pptx',
    //     ]
    // );
    // $datadok = $request->file('file');
    // $nama_dokumen =  'DOK'.date('Ymdhis').'.'.$request->file('file')->getClientOriginalExtension();
    // $datadok->move('dokumen/',$nama_dokumen);

    // $model = new Dokumen;
    // $model->name_file = $request->name_file;
    // $model->file = $nama_dokumen;
    // $model->save();
    // // Session::flash('sukses', 'Data berhasil di simpan')
    // return redirect('datadok');


    // }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name_file' => 'required',
                'file' => 'mimes:doc,docx,pdf,xlsx,xls,ppt,pptx',
            ]
        );
        $datadok = $request->file('file');
        $nama_dokumen = $request->file('file')->getClientOriginalName();
        $datadok->move('dokumens/', $nama_dokumen);

        $model = new Dokumen;
        $model->name_file = $request->name_file;
        $model->file = $nama_dokumen;
        $model->save();
        // Session::flash('sukses', 'Data berhasil di simpan')
        return redirect('datadok');
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
        $model = Dokumen::find($id);
        return view('admin.datadokumen.datadokedit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'name_file' => 'required',
                'file' => 'mimes:doc,docx,pdf,xlsx,xls,ppt,pptx',
            ]
        );
        $datadok = $request->file('file');
        $nama_dokumen = $request->file('file')->getClientOriginalName();
        $datadok->move('dokumens/', $nama_dokumen);

        $model = Dokumen::find($id);
        $model->name_file = $request->name_file;
        $model->file = $nama_dokumen;
        $model->save();
        // Session::flash('sukses', 'Data berhasil di simpan')
        return redirect('datadok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = Dokumen::find($id);
        $model->delete();
        return redirect('datadok');
    }

    //dokumen user controller
    public function alldata()
    {
        $data = Dokumen::all();
        return view('user.dokumen', compact('data'));
    }

    public function download($id)
    {
        $data = Dokumen::find($id);
        // dd($data);   
        return response()->download(public_path('dokumens/' . $data->file));
    }
}