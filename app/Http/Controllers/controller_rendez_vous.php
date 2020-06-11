<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jours_semaine;
use App\horairess;
use App\service;
use App\agentt;
use App\patient;
use App\rende_vous;
use Carbon\Carbon;


class controller_rendez_vous extends Controller
{

      //use Carbon\Carbon; 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    


    public function index()
    {   $rendez_vous=rende_vous::all();
        $jours_semaine=jours_semaine::all();
        $horaire=horairess::all();
        $service=service::all();
        $agentt=agentt::all();
        $patient=patient::all();
        return view('backend.rendez_vous.index',compact('rendez_vous','jours_semaine','horaire','service','agentt','patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
    /*$horaire=horairess::all();
  foreach ($horaire as $horaire) {
           // $heure=date('H:i:s');
             $Date=Carbon::now()->toDateString();
              $Time=Carbon::now()->toTimeString();
         //$mytime=Carbon\Carbon::now();
              if ($horaire->heure_fin <= $Time) {
                  echo $horaire->heure_fin;
              }
         
    
      }*/
        $jours_semaine=jours_semaine::all();
        $horaire=horairess::all();
        $service=service::all();
        $agent=agentt::all();
        $patient=patient::all();
          
        return view('backend.rendez_vous.create',compact('jours_semaine','horaire','service','agent','patient'));

        
    
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rendez_vous =new rende_vous();
        $rendez_vous->agentt_id=request('agentt_id');
        $rendez_vous->service_id=request('service_id');
        $rendez_vous->horairess_id=request('horairess_id');
        $rendez_vous->patient_id=request('patient_id');
        $rendez_vous->save();
        return redirect(route('rendez_vous.index'));
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
