<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:20',
            'email' => ['required', 'email:dns', 'unique:users'],
            'notlp' => ['required', 'min:10', 'max:14', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Berhasil Registrasi, Silahkan Login');

        return redirect('/login')->with('success', 'Berhasil Registrasi, Silahkan Login');
    }
}
