<?php

namespace App\Http\Controllers;

use App\Models\Auteurs;
use App\Models\Livres;
use Illuminate\Http\Request;

class livresController extends Controller

{

   
    public function getall()
    {
        $livres = Livres::with('auteur')->get();
        $auteurs = Auteurs::all();
        return view('livres', [

            'titres' => "Liste des livres",
            'livres' => $livres,
            'auteurs' => $auteurs,
           


        ]);
    }

    public function add(Request $request)
    {
        $validate = $request->validate([
            'titre' => 'required|max:150',
            'extrait' => 'required|max:150',
            'auteur' => 'required|exists:auteurs,id',
                    

        ]);
        
        $livre = new Livres();
      
        $livre->titre = $validate['titre'];
        $livre->extrait = $validate['extrait'];
        $livre->auteur_id = $validate['auteur'];
        
        $livre->save();
       

        return redirect()->route('livres');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $livre = Livres::find($id);
      
       
        
      

        return view('livre', [


            'livres' => $livre,
            
            



        ]);
    }

    public function showUpdate($id)
    {
        $livre = Livres::find($id);
        $auteur= Auteurs::all();
      
       
        
      

        return view('update',
    [
        'update'=> $livre,
        'auteur' => $auteur,
        'id' => $id,
    ]);


            
            
            



        
    }

   

   


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     
    

      $validate = $request->validate([
        'titre' => 'required|max:150',
        'extrait' => 'required',
       
                

    ]);
    
    $livre = Livres::find($id);
  
    $livre->titre = $validate['titre'];
    $livre->extrait = $validate['extrait'];
   
    
    $livre->update();
   

    return redirect()->route('livres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
        public function destroy($id)
{
    $delete = Livres::find($id);
    $delete->delete();

    return redirect()->route('livres');
}
    
}
