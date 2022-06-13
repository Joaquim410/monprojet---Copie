<?php

namespace App\Http\Controllers;

use App\Models\Auteurs;
use App\Models\Livres;
use Illuminate\Http\Request;

class auteurController extends Controller
{


    public function show($id)
    {
        $auteur = Livres::where('auteur_id', $id)->get();
        $auteurs = Auteurs::find($id);
                 

        return view('auteur', [


            'livre' => $auteur,
            'auteurs' => $auteurs,
            
            

        ]);
    }





}
