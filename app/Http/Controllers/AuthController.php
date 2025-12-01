<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $input = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // Cek apakah user dengan email tsb ada
        $user = User::where('email', $request->email)->first();

        // if ($user && Hash::check($request->password, $user->password)) {
        //     Auth::login($user);
        //     return redirect()->route('dashboard')->with('success', 'Berhasil login!');
        // }

        if (Auth::attempt($input)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); //Arahkan user biasa
        }
        // Jika gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
        // return back()->with('error', 'Email atau password salah.')->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

        //return redirect()->route('login')->with('success', 'Anda telah logout.');
    }
}
