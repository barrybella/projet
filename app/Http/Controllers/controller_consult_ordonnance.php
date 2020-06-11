<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agentt;
use App\patient;
use App\produit;
use App\consultation;
use App\service;
use App\specialite;
use App\ordonance;
use Illuminate\Support\Facades\DB;

class controller_consult_ordonnance extends Controller
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
        return view('backend.ordonnance.liste',compact('agentt','consultation','patient','service','specialite'));
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

    public function ordonnance($id)
    {
       $consultation = consultation::findOrFail($id);

         $produits = $consultation->produits;

        return view('backend.ordonnance.detaille',compact('consultation','produits'));
    }

    public function createOrdonnance($id)
    {
          $consultation = consultation::findOrFail($id);

          $produit = produit::all();

        

        return view('backend.ordonnance.ajout_detaille',compact('consultation','produit'));
    }

    public function storeOrdonnance($id)
    {
        $consultation = consultation::findOrFail($id);

        $produit = produit::findOrFail(request('produit_id'));

        $consultation->produits()->attach($produit,['quantite'=>request('quantite'),'utilisation'=>request('utilisation')]);

        return redirect()->route('ordonnance',$id);
    }
}
