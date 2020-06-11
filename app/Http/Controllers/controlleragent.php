<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\specialite;
use App\service;
use App\type_agent;
use App\agentt;
use Illuminate\Support\Facades\DB;

class controlleragent extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $agents = agentt::all();
        $specialiste=specialite::all();
        $service=service::all();
        // $agents=DB::table('agentts')
        //             ->join('specialites','specialites.id','=','agentts.id_sepcialiste')
                    
        //             ->join('services','services.id','=','agentts.idservice')
        //             ->join('type_agents','type_agents.id','=','agentts.id_type_agence')
        //             ->select('specialites.specialite','services.nom_services','type_agents.type_agent','agentts.nom','agentts.prenom','agentts.date_naissance','agentts.lieu_naissance','agentts.email','agentts.genre','agentts.quartier','agentts.telephone')
        //             ->get();
        return view('backend.agent.index',compact('agents','specialiste','service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $specialiste=specialite::all();
        $service=service::all();
        
        $type_agent=type_agent::all();
        return view('backend.agent.create',compact('service','specialiste','type_agent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $img =time().'.'.$request->photo->getClientOriginalExtension();
        
        $request->photo->move(public_path('image'), $img);


      request([

        'nom' => 'required',
        'prenom' => 'required',
        'date_naissance' => 'required',
        'lieu_naissance' => 'required',
        'genre' => 'required',
        'email' => 'required',
        'quartier' => 'required',
        'telephone' => 'required',
        'photo' => 'required',
        'idservice' => 'required',
        'id_type_agence' => 'required',
        'specialite_id' => 'required',
       


        ]) ;
      $data = $request->all();
      $data['photo'] = $img;
      agentt::create($data);
      return redirect(route('agent.index'));

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
