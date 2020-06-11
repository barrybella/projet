<?php

namespace App\Http\Controllers;

use App\Fonction;
use App\Administration;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Personnel de l\'administration';

        $personnels = Administration::get();

   

        return view('backend.administrations.index',compact('title','personnels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Ajout personnel';

        $fonctions = Fonction::get();

        $personnel = new Administration();

        return view('backend.administrations.create',compact('title','fonctions','personnel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required'
        ]); 

        $personnel = new Administration();

        $personnel->nom = request('nom');
        $personnel->prenom = request('prenom');
        $personnel->fonction_id = request('fonction_id');

        $image = $request->file('selected_image');
    
        $imageNom =$personnel->fonction->fonction.''. $personnel->nom.''.$personnel->prenom .'.'.$image->getClientOriginalExtension();

        $image->move(public_path("images_administration"),$imageNom);
 
        $personnel->image = $imageNom;

        $personnel->save();

        return redirect()->route('administration.index');
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
        $personnel = Administration::findOrFail($id);

        $title = 'Modification';

        $fonctions = Fonction::get();

        return view('backend.administrations.edit',compact('title','personnel','fonctions'));
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
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'fonction_id'=>'required'
        ]); 

        $personnel = Administration::findOrFail($id);

        $personnel->nom = request('nom');
        $personnel->prenom = request('prenom');
        $personnel->fonction_id = request('fonction_id');

        $personnel->save();

        return redirect()->route('administration.index');

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

    public function change($id)
    {
        $personnel = Administration::findOrFail($id);

        $personnel->status = !$personnel->status;

        $personnel->save();

        return redirect()->route('administration.index');
    }

   
}
