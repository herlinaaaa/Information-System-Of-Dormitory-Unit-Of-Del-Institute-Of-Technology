<?php

namespace App\Http\Controllers;

use App\Models\DormMate;
use App\Models\Evaluation;
use App\Models\KritikSaran;
use App\Models\Sakit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index()
    {
        // get data mahasiswa pertahun berdasarkan jenis kelamin
        $chart = [];
        $total_mahasiswa = DormMate::count();
        $total_mahasiswa_putri = DormMate::where('gender', 'Perempuan')->count();
        $total_mahasiswa_putra = DormMate::where('gender', 'Laki-laki')->count();
        $data = DormMate::selectRaw('YEAR(created_at) AS year, gender, COUNT(*) AS total')
            ->groupBy('year', 'gender')
            ->get();
        // dd($data);
        foreach ($data as $row) {
            $chart['year'] = (string) $row->year;
            if ($row->gender == "Perempuan") {
                $chart['Perempuan'] = $row->total;
            } else {
                $chart['Laki-laki'] = $row->total;
            }
        }
        // dd($chart);
        $sakit = Sakit::whereDate('created_at', Carbon::now())->get();
        $kritiksaran = KritikSaran::whereDate('created_at', Carbon::now())->get();
        $data = Evaluation::all();
        return view('admin.dashboard', compact('data', 'chart', 'total_mahasiswa', 'total_mahasiswa_putri', 'total_mahasiswa_putra', 'sakit'));
    }

    public function eval()
    {
        return view('admin.dashboard', compact('data'));
    }
    public function sakit()
    {
        $sakit = Sakit::all();
        return view('admin.dashboard', compact('data'));
    }

    public function kritiksaran()
    {
        $kritiksaran = KritikSaran::all();
        return view('admin.dashboard', compact('data'));
    }


}
