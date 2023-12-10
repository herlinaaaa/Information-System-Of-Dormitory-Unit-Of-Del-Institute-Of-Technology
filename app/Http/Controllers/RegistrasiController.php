<?php


namespace App\Http\Controllers;

use Hash;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class RegistrasiController extends Controller
{
    public function registrasi()
    {
        return view('login.view_registrasi');
    }

    public function registerProses(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'username' => 'required|unique:users',
                'name' => 'required',
                'password' => 'required|min:5|max:12',
                'role' => 'required'
            ]);
            $user = new User();
            $user->username = $validatedData['username'];
            $user->name = $validatedData['name'];
            $user->password = Hash::make($validatedData['password']);
            $user->role = $validatedData['role'];

            $user->save();

            return back()->with('success', 'Berhasil ditambah');

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal ditambah: ' . $e->getMessage())->withErrors($e->errors())->withInput();
        }
    }
}