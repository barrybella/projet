<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\consultation;
use App\patient;
use App\detaille_ordonnance;
use App\ordonance;
use App\agentt;
use App\produit;

class ajout_detaille extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $ordonnance=detaille_ordonnance::all();
        $consultation=consultation::all();
        $agentt=agentt::all();
        $patient=patient::all();
        $produit=produit::all();
       return view('pages.liste_ordonance',compact('ordonnance','consultation','agentt','patient','produit'));
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
       return view('pages.ajout_detaille',compact('consultation','agentt','patient','produit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      detaille_ordonnance::create(request()->all());
      return redirect(route('detaille.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $ordonnance = detaille_ordonnance::findOrFail($id);
        // $consultation =  consultation::findOrFail($id);
        // $agentt = agentt::findOrFail($id);
         //  $patient = patient::findOrFail($id);
          //$ordonnances = detaille_ordonnance::all();
          $produit=produit::all();
         return view('pages.liste_detaille_ordonnance',compact('ordonnance','produit'));
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
