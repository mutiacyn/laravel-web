<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('login-form');
    }

    public function login(Request $request)
    {
        // $data['nama']       =$request->nama;
        // $data['email']      =$request->email;
        // $data['pertanyaan'] =$request->pertanyaan;

        // $request->validate([
		//     'nama'  => 'required|max:10',
		//     'email' => ['required','email'],
		//     'pertanyaan' => 'required|max:300|min:8',
		// ],[
        //     'nama.required'=>'nama tidak boleh kosong',
        //     'email.email' => 'Email Tidak Valid'
        // ]);

        // return view('home-question-respon', $data);
    }
}
