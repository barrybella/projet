<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hospitalisation extends Model
{
   protected $fillable=['id_consulation','id_lit','date_debut','date_fin'];

    public function consultation()
    {
    	return $this->belongsTo('App\consultation');
    }
   public function patient()
    {
    	return $this->belongsTo('App\patient');
    }
     public function agentt()
    {
    	return $this->belongsTo('App\agentt');
    }
    public function specialite()
    {
    	return $this->belongsTo('App\specialite');
    }
    public function type_agent()
    {
        return $this->belongsTo('App\type_agent');
    }
     public function service()
    {
    	return $this->belongsTo('App\service');
    }
}
