<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArtisanAuthController extends Controller
{
    //

    public function index()
    {
        $data['pageTitle']='ARTICONNECT | Page de connexion';

        return view('pages.connexion', $data);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'tel' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if (Auth::guard('artisan')->attempt(['tel' => $request->tel, 'password' => $request->password])) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'tel' => 'Le numéro de téléphone ou le mot de passe est incorrect.',
        ]);
    }

    public function logout()
    {
        Auth::guard('artisan')->logout();
        return redirect()->route('artisan.login');
    }
}
