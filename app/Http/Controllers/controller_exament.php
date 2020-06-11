<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\consultation;
use App\agentt;
use App\type_exament;

use App\exament;
use App\patient;

class controller_exament extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $agentt=agentt::all();
        $type_exament=type_exament::all();
        $consultation=consultation::all();
         $exament=exament::all();
        return view('backend.examen.index',compact('agentt','type_exament','consultation','exament'));
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
        $type_examents=type_exament::all();
    
        return view('backend.examen.create',compact('consultation','agentt','patient','type_examents'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       exament::create(request()->all());
       return redirect(route('exament.index'));
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
    public function Exament($id)
    { 
      $consultation=consultation::findOrFail($id);
      $exament=$consultation->examents;
      $agentt=agentt::all();
      $patient=patient::all();
      $type_exament=type_exament::all();

        return view('backend.examen.index',compact('type_examents','agentt','patient','exament'));
    }

    public function createExament($id)
    {
          $consultation = consultation::findOrFail($id);

          $type_examents = type_exament::all();
          $agentt=agentt::all();

        

        return view('backend.examen.create',compact('consultation','type_examents','agentt'));
    }

    public function storeExament($id)
    {
        $consultation = $id;
        $exament = new exament();
        $exament->consultation_id=$consultation;
        $exament->agentt_id=request('agentt_id');
        $exament->type_exament_id=request('type_exament_id');
        $exament->date_consultation=request('date_consultation');
        $exament->save();

        return redirect()->route('Exament',$id);
    }
}
