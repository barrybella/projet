<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rende_vous extends Model
{
    protected $fillable=['agentt_id','service_id','horairess_id' ,'patient_id'];

 public function agentt()
   {
   	return $this->belongsTo('App\agentt');
   }
   public function service()
   {
   	return $this->belongsTo('App\service');
   }
   public function horairess()
   {
   	return $this->belongsTo('App\horairess');
   }
   public function patient()
   {
   	return $this->belongsTo('App\patient');
   }
    public function jours_semaines()
   {
   	return $this->belongsTo('App\jours_semaine');
   }
}
