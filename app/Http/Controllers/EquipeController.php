<?php

namespace App\Http\Controllers;

use App\Poste;
use App\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Les Joueurs de l\'équipe';

        $equipes = Equipe::get();

        return view('backend.equipes.index',compact('title','equipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Ajout';

        $equipe = new Equipe();

        $postes = Poste::get();

        return view('backend.equipes.create',compact('title','equipe','postes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipe=new Equipe();
        $this->inputValidation($request,$equipe);

       

        $equipe->nom = request('nom');
        $equipe->prenom = request('prenom');
        $equipe->date_naissance = request('date_naissance');
        $equipe->taille = request('taille');
        $equipe->numero = request('numero');
        $equipe->poids = request('poids');
        $equipe->nationalite = request('nationalite');
        $equipe->poste_id = request('poste_id');
        $equipe->bio = request('bio');

        $image = $request->file('selected_image');
        $imageNom =$equipe->nom.''.$equipe->prenom.''.$equipe->numero.'.'.$image->getClientOriginalExtension();
        $image->move(public_path("images_equipe"),$imageNom);
        $equipe->image = $imageNom ;

        $equipe->save();

        return redirect()->route('equipe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipe = Equipe::findOrFail($id);

        $title = 'Information de '.$equipe->prenom;

        return view('backend.equipes.show',compact('equipe','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postes = Poste::get();
        $equipe = Equipe::findOrFail($id);

        $title = 'Modification ';

        return view('backend.equipes.edit',compact('title','equipe','postes'));
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
        $equipe = Equipe::findOrFail($id);
        $this->inputValidation($request,$equipe);

        $equipe->nom = request('nom');
        $equipe->prenom = request('prenom');
        $equipe->date_naissance = request('date_naissance');
        $equipe->taille = request('taille');
        $equipe->numero = request('numero');
        $equipe->poids = request('poids');
        $equipe->nationalite = request('nationalite');
        $equipe->poste_id = request('poste_id');
        $equipe->bio = request('bio');

        $equipe->save();

        return redirect()->route('equipe.index');

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

    public function inputValidation(Request $request,Equipe $equipe)
    { 
        if($request->getMethod() == 'POST')
        return $this->validate($request, [
            'nom' => 'required|min:2|',
            'prenom' => 'required|',
            'nationalite' => 'required|',
            'taille' => 'required',
            'numero'=>'required|unique:equipes',
    
    ]);  


    return $this->validate($request, [
        'numero'=>'required|unique:equipes,numero,' .$equipe->id
        ]);  
    }
}
