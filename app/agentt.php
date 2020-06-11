<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agentt extends Model
{
    protected $fillable=['nom','prenom','date_naissance','lieu_naissance','genre','email','quartier','telephone','photo','service_id','type_agent_id','specialite_id'];

    public function specialite()
    {
    	return $this->belongsTo('App\Specialite');
    }
    public function type_agent()
    {
    	return $this->belongsTo('App\type_agent');
    }
     public function service()
    {
    	return $this->belongsTo('App\service');
    }
    public function consultations()
   {
    return $this->belongsToMany('App\consultation');
   }
}
