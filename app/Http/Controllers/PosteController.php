<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Poste;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $this->check('view_all_postes');
       $poste=Poste::get();
       return view('backend.postes.index',['poste'=>$poste]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->check('create_poste');
        $poste = new Poste;
        $title="Ajout poste";
        return view('backend.postes.create',['poste'=>$poste,'title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->check('create_poste');
        $this->validate($request,[
        'nom'=> "required|unique:postes",
        ]);
        $poste = new Poste;
        $poste ->nom = $request['nom'];
        $poste -> save();
        return redirect('/poste')->with('response','poste add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->check('show_poste');
         $poste = Poste::findOrFail($id);
         return view('backend.postes.show',['poste'=>$poste]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->check('update_poste');
        $title = 'Mise à jour';
        $poste = Poste::findOrFail($id);
        return view('backend.postes.edit',['poste'=>$poste,'title'=>$title]);

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
        $this->check('update_poste');
        $poste = Poste::findOrFail($id);
        $this->validate($request,[
            "nom" => "required|unique:postes,nom," .$id,
        ]);
        $poste ->nom = $request['nom'];
        $poste ->update();
        return redirect('/poste')->with('response','poste modify successfully');
    }


    public function changeStatus($id){
        $this->check('show_poste');
        $poste = Poste::findOrFail($id);
        $poste->status = !$poste->status;
        $poste->save();
        return back();
    }

    
    public function destroy($id)
    {
        $this->check('delete_poste');
    }
     public function check($permission)
    {
        if(!Auth::user()->hasPermission($permission))
            abort(401);
    }
}
