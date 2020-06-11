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

class controllerconsulation extends Controller
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
        return view('backend.consultation.index',compact('agentt','consultation','patient','service','specialite'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient=patient::all();
         $agentts=agentt::all();
        /*$agentts=DB::table('agentts')
                    ->join('specialites','specialites.id','=','agentts.id_sepcialiste')
                    
                    ->join('services','services.id','=','agentts.idservice')
                    ->join('type_agents','type_agents.id','=','agentts.id_type_agence')
                    ->select('specialites.specialite','services.nom_services','type_agents.type_agent','agentts.nom','agentts.prenom','agentts.date_naissance','agentts.lieu_naissance','agentts.email','agentts.genre','agentts.quartier','agentts.telephone')
                    ->get();*/
       return view('backend.consultation.create',compact('agentts','patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       consultation::create(request()->all());
       return redirect(route('consultation.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultations = consultation::findOrFail($id);
        $patient = patient::all();
        $agent=agentt::all();
         //$consultations=$consultation->consultations;
        return view('backend.dossier_medical.index',compact('consultations','patient','agent'));
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
       $ordonance = ordonance::findOrFail($id);

         $produits = $ordonance->produits;

        return view('backend.ordonnance.detaille',compact('ordonance','produits'));
    }

    public function createOrdonnance($id)
    {
          $ordonance = ordonance::findOrFail($id);

          $produit = produit::all();

        

        return view('backend.ordonnance.ajout_detaille',compact('ordonance','produit'));
    }

    public function storeOrdonnance($id)
    {
        $ordonance = ordonance::findOrFail($id);

        $produit = produit::findOrFail(request('produit_id'));

        $ordonance->produits()->attach($produit,['quantite'=>request('quantite'),'utilisation'=>request('utilisation')]);

        return redirect()->route('ordonnance',$id);
    }
}
