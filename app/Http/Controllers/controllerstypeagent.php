<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\type_agent;

class controllerstypeagent extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_agent=type_agent::all();
        return view('backend.type_agent.index',compact('type_agent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.type_agent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        type_agent::create(request()->all());
        return redirect(route('type_agent.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type_agent = type_agent::findOrFail($id);

        $agents = $type_agent->agentts;

        $title = "Liste des agents  ".$type_agent->type_agent;
        return view('pages.listea',compact('agents','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

 $type_agent=type_agent::findOrFail($id);
         return view('pages.modifie_type_agent',compact('type_agent'));

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
      $type_agent=type_agent::findOrFail($id);
          $type_agent->update(request()->all());
          return redirect(route('type_agent.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       type_agent::destroy($id);
       return redirect(route('type_agent.index'));
    }
}
