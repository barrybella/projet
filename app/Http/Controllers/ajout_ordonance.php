<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agentt;
use App\patient;
use App\ordonance;
use App\specialite;
use App\consultation;
use App\produit;
class ajout_ordonance extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordonance=ordonance::all();
        $agentt=agentt::all();
        $patient=patient::all();
        $specialite=specialite::all();
       return view('backend.ordonnance.index',compact('ordonance','agentt','patient','specialite'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $consultation=consultation::all();
        $agentt=agentt::all();
        $patient=patient::all();
        $produit=produit::all();
    
        return view('backend.ordonnance.create',compact('consultation','agentt','patient','produit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       detaille_ordonance::create(request()->all());
       return redirect(route('ordonance.index'));
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

    public function ordonance($id)
    {
       
        $consultation=consultation::findOrFail($id);
        $ordonance=$consultation->ordonance;
        $agent=agentt::all();
        $patient=patient::all();
       
 return view('backend.ordonnance.index',compact('consultation','ordonance','agent','patient'));
    }


    public function createordonance($id)
    {
        $consultation=$id;
  return view('backend.ordonnance.create',compact('consultation'));
    }


    public function storeordonance($id)
    {
        $consultation = $id;
    $ordonance= new ordonance();
    $ordonance->consultation_id =  $consultation;
    $ordonance->date = request('date') ; 
    $ordonance->save();
    return redirect()->route('ordonance',$id)->with('info','medicament ajouter ');
     }
}
