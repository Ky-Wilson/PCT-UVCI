<?php

namespace App\Http\Controllers\Artisan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $data['pageTitle']='ARTICONNECT | Mon compte';

        return view('artisan.dashboard', $data);
    }
}
