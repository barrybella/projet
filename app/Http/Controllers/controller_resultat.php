<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\consultation;
use App\agentt;
use App\type_exament;
use App\exament;
use App\patient;
use App\resultats_exament;

class controller_resultat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Resultat=resultats_exament::all();
      $agentt=agentt::all();
      $patient=patient::all();
      $consultation=consultation::all();
     

        return view('backend.resultat_exament.index', compact('Resultat','consultation','agentt','patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $exament = exament::findOrFail($id);
       return view('backend.resultat_exament.create',compact('exament'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $exament = exament::findOrFail($id);
        $Resultat = new resultats_examents();
        $Resultat->exament_id=$exament;
        $Resultat->description=request('description');
        $Resultat->save();

        return redirect(route('resultat.index'));
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
     public function resultats($id)
    {  
      $exament=exament::findOrFail($id);
      $resultat=$exament->resultats_exament;
     // $Resultat=resultats_exament::all();
      $agentt=agentt::all();
      $patient=patient::all();
      $consultation=consultation::all();
      $type_exament=type_exament::all();
    return view('backend.resultat_exament.index', compact('resultat','exament','consultation','agentt','patient'));
    }

    public function createResultat($id)
    {
          $exament = exament::findOrFail($id);

        

        return view('backend.resultat_exament.create',compact('exament'));
    }

    public function storeResultat($id)
    {
        $exament = $id;
        $Resultat = new resultats_exament();
        $Resultat->exament_id=$exament;
        $Resultat->description=request('description');
        $Resultat->save();
        return redirect()->route('resultats',$id);
    }
}
