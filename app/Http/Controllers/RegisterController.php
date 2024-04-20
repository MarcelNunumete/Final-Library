<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required',
            'username' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        User::create($validatedData);
        Session::flash('success', 'Akun sudah terdaftar,Silahkan login.');
        return redirect('/login');
    }
}
