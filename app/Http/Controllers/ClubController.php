<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title ='Les Clubs Nationaux';

        $clubs = Club::get();

        return view('backend.clubs.index',compact('title','clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title ='Ajout D\'un Club';

        $club = new Club();

        return view('backend.clubs.create',compact('title','club'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $club = new Club();
       
        $this->inputValidation($request,$club);

        // $this->validate($request,['
        // selected_image'=>'required|size:2048
        // ']);


        $club->nom = request('nom');

        $club->sigle = request('sigle');

      $image = $request->file('selected_image');
    
       $imageNom =$club->nom.'.'.$image->getClientOriginalExtension();

       $image->move(public_path("logo_Equipe"),$imageNom);

       $club->image = $imageNom ;

       $club->save();

       return redirect(route('club.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $club = Club::findOrFail($id);

        $title = $club->nom;

        return view('backend.clubs.show',compact('title','club'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $club = Club::findOrFail($id);

        $title = 'Modification de '.$club->nom;

        return view('backend.clubs.edit',compact('club','title'));
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
        $club = Club::findOrFail($id);

        $image = $request->file('selected_image');

    //     if($image != null)
    // {
    //    $imageNom =$club->nom.'.'.$image->getClientOriginalExtension();

    //    $image->move(public_path("logo_Equipe"),$imageNom);

    //    $club->image = $imageNom ;
    // }
        $club->nom = request('nom');
        $club->sigle = request('sigle');
        $club->save();

        return redirect()->route('club.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club = Club::findOrFail($id);
        $club->status = !$club->status;
        $club->save();

        return redirect(route('club.index'));
    }

    public function inputValidation(Request $request,Club $club)
    {
        if($request->getMethod() == 'POST')
        return $this->validate($request, [
            'nom' => 'required|min:2|unique:clubs'
        ]); 

     return $this->validate($request, [
            'nom' => 'required|min:2|unique:clubs,nom,' .$club->id
    ]);  
    }
}
