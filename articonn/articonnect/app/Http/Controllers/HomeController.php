<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data['pageTitle']='ARTICONNECT | Accueil';
        $data['metiers'] = DB::table('metiers')->select('*')->get();
        return view('welcome', $data);
    }


    public function about()
    {
        $data['pageTitle']='ARTICONNECT | Qui sommes nous';
        return view('pages.about', $data);
    }

    public function contact()
    {
        $data['pageTitle']='ARTICONNECT | Nos contatcts';
        return view('pages.contact', $data);
    }
}
