<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agentt;
use App\patient;
use App\produit;
use App\consultation;
use App\service;
use App\specialite;
use App\lit;
use App\hospitalisation;

class consult_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
         $consultation=consultation::all();
         $patient=patient::all();
         $agentt=agentt::all();
         $service=service::all();
         $specialite=specialite::all();
        return view('backend.hospitalisation.show',compact('agentt','consultation','patient','service','specialite'));
       
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
    public function store(Request $request,$id)
    {
       



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
       $consultation = consultation::findOrFail($id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }



    public function hospitalisation($id)
    {
        $hospitalisation=hospitalisation::all();
        $consultation=consultation::all();
        $agentt=agentt::all();
        $patient=patient::all();

 return view('backend.hospitalisation.index',compact('hospitalisation','consultation','agentt','patient'));
    }


    public function createhospitalisation($id)
    {
        $consultation=$id;
        $lit=lit::all();
  return view('backend.hospitalisation.create',compact('lit','consultation'));
    }


    public function storehospitalisation($id)
    {
        $consultation = $id;
    $hospitalisation = new hospitalisation();
    $hospitalisation->consultation_id =  $consultation;
    $hospitalisation->lit_id = request('lit_id') ; 
    $hospitalisation->date_debut = request('date_debut');
    $hospitalisation->date_fin = request('date_fin');
    $hospitalisation->save();
   // return redirect(route('hospitalisation'));
    return redirect()->route('hospitalisation',$id);
     }
}
