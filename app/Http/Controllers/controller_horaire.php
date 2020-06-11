<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jours_semaine;
use App\ horairess;

class controller_horaire extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        
        $jours_semaines=jours_semaine::all();
        $horaire= horairess::all();
        return view('backend.horaire.index',compact('jours_semaines','horaire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $jours=jours_semaine::all();
        return view('backend.horaire.create',compact('jours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $horaire  = new  horairess();
       $horaire->jours_semaine_id=request('jours_semaine_id');
       $horaire->heure_debut=request('heure_debut');
       $horaire->heure_fin=request('heure_fin');
       $horaire->save();
       return redirect(route('horaire.index'));
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
        //
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
