<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluation;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $data = Evaluation::all();
        return view('admin.evaluation.evaluation', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        $model = new Evaluation;
        return view('admin.evaluation.evaluation', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {

        $model = new Evaluation;
        $model->name = $request->name;
        $model->date = $request->date;
        $model->pesan = $request->pesan;
        $model->asrama = $request->asrama;
        $model->save();

        return redirect('evaluation');
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
        $model = Evaluation::find($id);
        return view('admin.evaluation.evaluationedit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *

     */
    public function update(Request $request, $id)
    {
        $model = Evaluation::find($id);
        $model->name = $request->name;
        $model->date = $request->date;
        $model->pesan = $request->pesan;
        $model->asrama = $request->asrama;
        $model->save();

        return redirect('evaluation');
    }

    /**
     * Remove the specified resource from storage.

     */
    public function destroy($id)
    {
        $model = Evaluation::find($id);
        $model->delete();
        return redirect('evaluation');
    }

    //user controller
    public function index1()
    {
        $data = Evaluation::where('asrama', 'Rusun 1')->get();
        $data = Evaluation::where('asrama', 'Semua Asrama')->get();
        return view('user.evalr1', compact('data'));
    }
    public function index2()
    {
        $data = Evaluation::where('asrama', 'Rusun 2')->get();
        $data = Evaluation::where('asrama', 'Semua Asrama')->get();
        return view('user.evalr2', compact('data'));
    }
    public function index3()
    {
        $data = Evaluation::where('asrama', 'Rusun 3')->get();
        $data = Evaluation::where('asrama', 'Semua Asrama')->get();
        return view('user.evalr2', compact('data'));
    }
    public function index4()
    {
        $data = Evaluation::where('asrama', 'Rusun 4')->get();
        $data = Evaluation::where('asrama', 'Semua Asrama')->get();
        return view('user.evalr4', compact('data'));
    }
    public function indexp()
    {
        $data = Evaluation::where('asrama', 'Pniel')->get();
        $data = Evaluation::where('asrama', 'Semua Asrama')->get();
        return view('user.evalp', compact('data'));
    }
    public function indexs()
    {
        $data = Evaluation::where('asrama', 'Silo')->get();
        $data = Evaluation::where('asrama', 'Semua Asrama')->get();
        return view('user.evals', compact('data'));
    }
    public function indexk()
    {
        $data = Evaluation::where('asrama', 'Kapernaum')->get();
        $data = Evaluation::where('asrama', 'Semua Asrama')->get();
        return view('user.evalk', compact('data'));
    }
    public function indexdt()
    {
        $data = Evaluation::where('asrama', 'Danau Toba')->get();
        $data = Evaluation::where('asrama', 'Semua Asrama')->get();
        return view('user.evaldt', compact('data'));
    }

}
