<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pageTitle']='ARTICONNECT | Page d\'inscription';

        $data['metiers'] = DB::table('metiers')->select('*')->get();
        return view('pages.inscription', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nom = request('nom');
        $tel = request('tel');
        $activite = request('metiers');
        $pwd = request('pwd');
        $ville = request('ville');
        if($ville != 'abidjan'){
            $commune = NULL;
        }else{
            $commune = request('commune');
        }

        $datas = array('nom'=>$nom, 'tel'=>$tel, 'metier_id'=>$activite, 'ville'=>$ville, 'commune'=>$commune, 'password'=> Hash::make($pwd), 'created_at'=>gmdate('Y-m-d H:i:s'));

        $lastid = DB::table('artisans')->insertGetId($datas);

        if ($lastid) {
            session()->flash('success',"Votre compte a été crée, vous pouvez à présent vous connecter");
            return redirect()->route('inscription.index');
        }else{

            session()->flash('error',"Echec de votre inscription");
            return redirect()->route('inscription.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
