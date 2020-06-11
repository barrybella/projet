<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\specialite;

class controllerspecialiste extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialiste=specialite::all();
        return view('backend.specialite.index',compact('specialiste'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('backend.specialite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'specialite'=>'required|min:4|unique:specialites,specialite'
        ]);
        $specialite = new Specialite();
        $specialite->specialite = request('specialite');
        $specialite->save();
       
        return redirect(route('specialiste.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $specialite = specialite::findOrFail($id);

        $agents = $specialite->agentts;

        $title = "Liste des agents  ".$specialite->specialite;
        return view('pages.liste',compact('agents','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

 $specialiste=specialite::findOrFail($id);
         return view('pages.modifiespecialiste',compact('specialiste'));

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
      $specialiste=specialite::findOrFail($id);
          $specialiste->update(request()->all());
          return redirect(route('specialiste.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       specialite::destroy($id);
       return redirect(route('specialiste.index'));
    }
}
