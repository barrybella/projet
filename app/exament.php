<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exament extends Model
{
   protected $fillable=['consultation_id','agentt_id','type_exament_id','date_consultation'];


    public function type_exament()
    {
    	return $this->belongsTo('App\type_exament');
    }
     public function agentt()
    {
    	return $this->belongsTo('App\agentt');
    }
    public function consultation()
    {
    	return $this->belongsTo('App\consultation');
    }
     public function patient()
    {
        return $this->belongsTo('App\patient');
    }
     public function  resultats_exament()
    {
        return $this->hasMany('App\resultats_exament');
    }
    
}
