<?php

namespace App\Http\Controllers;

// use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Models\Profil;
use App\Models\DormMate;



class beranda extends Controller
{
    public function index()
    {

        // $total_mahasiswa = DormMate::count();
        // $total_mahasiswa_putri = DormMate::where('gender', 'Perempuan')->count();
        // $total_mahasiswa_putra = DormMate::where('gender', 'Laki-laki')->count();

        return view('user.beranda');
    }

    public function index_kamar()
    {
        // $prof = Profil::join('dormmate', 'dormmate.user_nim', '=', 'profil.nim')->select('dormmate.*', 'profil.*')->get();

        return view('user.halamankamar');
    }

    public function admin()
    {
        return view('admin.dashboard');
    }
}