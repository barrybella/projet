<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Competition;

class CompetitionController extends Controller
{
    
     public function index()
    {
        $this->check('view_all_competitions');
       $competition=Competition::get();
       return view('backend.competitions.index',['competition'=>$competition]);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->check('create_competition');
        $competition = new Competition;
        $title="Ajout Competition";
        return view('backend.competitions.create',['competition'=>$competition,'title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

        $this->check('create_competition');
        $this->validate($request,[
        'nom'=> "required|unique:competitions",
        ]);
        $competition = new Competition;
        $competition ->nom = $request['nom'];
        $competition -> save();
        return redirect('/competition')->with('response','competition add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->check('show_competition');
        $competition = Competition::findOrFail($id);
        return view('backend.competitions.show',['competition'=>$competition]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->check('update_competition');
        $title = 'Mise à jour';
        $competition = Competition::findOrFail($id);
        return view('backend.competitions.edit',['competition'=>$competition,'title'=>$title]);

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
        $this->check('update_competition');
        $competition = Competition::findOrFail($id);
        $this->validate($request,[
            "nom" => "required|unique:competitions,nom," .$id,
        ]);
        $competition ->nom = $request['nom'];
        $competition ->update();
        return redirect('/competition')->with('response','competition modify successfully');
    }


    public function changeStatus($id){
        $this->check('show_competition');
        $competition = Competition::findOrFail($id);
        $competition->status = !$competition->status;
        $competition->save();
        return back();
    }
    public function destroy($id)
    {
         $this->check('delete_competition');
    }

    public function check($permission)
    {
        if(!Auth::user()->hasPermission($permission))
            abort(401);
    }



}
