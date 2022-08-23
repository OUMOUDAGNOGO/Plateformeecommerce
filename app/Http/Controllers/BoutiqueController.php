<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\type_boutique;
use App\Models\User;
use App\Models\boutiques;

class BoutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boutiques = boutiques::all();
        
        return view('Boutiques.index' ,compact('boutiques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeb = type_boutique::all();
        
        return view('Boutiques.boutiquesRegistre' ,compact('typeb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verification = $request->validate(
            [
            'nom_complet' => ['required', 'string', "max:200"],
            'nom_boutique' => ['required', 'string', "max:200"],
            'adresse_boutique'=>['required','string',"max:250"],
              'telephone_boutique'=>['required','string',"max:250"],
             'email'=>['required','string',"max:250"],
             'password'=>['required','string',"max:250"],

            ]
            );
            If($verification)
        {
              $user = User ::create(
            [
                'name' =>  $request['nom_boutique'],
                'email' => $request['email'],
                'password' =>bcrypt($request['password']),              
                  'statut' => 'boutique',
            ]
         );

         if ($user)
         {
           boutiques::create(
            [
                'nom_complet'=>  $request['nom_complet'],
                'nom_boutique' =>  $request['nom_boutique'],
                'adresse_boutique' => $request['adresse_boutique'],
                'telephone_boutique' => $request['telephone_boutique'],
                'userId' => $user->id,
                'type_boutiqueId' => $request['type_boutiqueId'],
                'email' => $request['email'],
                'password' =>bcrypt($request['password']),
                
            ]
           );
           $boutiques = boutiques::create($verification);
    
        return redirect('/admin.adminregistre')->with('success', 'vendeurs ajouter avec succèss');
         }

        }

           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $validatedData = $request->validate([
            'nom_complet' => 'required', 'string', "max:200",
            'nom_boutique' => 'required', 'string', "max:200",
            'adresse_boutique'=>'required','string',"max:250",
              'telephone_boutique'=>'required','string',"max:250",
             'email'=>'required','string',"max:250",
             'password'=>'required','string',"max:250",
        ]);
    
        boutiques::whereId($id)->update($validatedData);
    
        return redirect('/admin.index')->with('success', 'boutique mise à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
