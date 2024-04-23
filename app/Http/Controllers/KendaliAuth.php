<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class KendaliAuth extends Controller
{
    public function register(Request $request){
        //dd($request);
        $validasi = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ],[
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Gunakan @',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'gunakan sandi'
        ]);

        User::create([
            'name' => $validasi['name'],
            'email' => $validasi['email'],
            'password' => $validasi['password']
        ]);

        FacadesAlert::success("Data berhasil ditambahkan");
        return redirect('login');
    }

    public function login(Request $request){
        $validasi = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' => 'email tidak boleh kosong!',
            'password.required' => 'password tidak boleh kosong'
        ]);

        if(Auth::attempt($validasi)){
            $request->session()->regenerate();

            FacadesAlert::success('Login berhasil');
            return view('awal');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        FacadesAlert::success('Berhasil Logout!');
        return redirect('login');
    }
}
