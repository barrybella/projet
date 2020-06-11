<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detaille_ordonnance extends Model
{
   protected $fillable=['consultation_id','consultations_id','date','produit_id','quantite','utilisation','1produit_id','1quantite','1utilisation','2produit_id','2quantite','2utilisation','3produit_id','3quantite','3utilisation','4produit_id','4quantite','4utilisation'];



public function consultation()
    {
    	return $this->belongsTo('App\consultation');
    }
    public function produit()
    {
    	return $this->belongsTo('App\produit');
    }
     public function agentt()
    {
    	return $this->belongsTo('App\agentt');
    }
     public function patient()
    {
        return $this->belongsTo('App\patient');
    }
     public function specialite()
    {
        return $this->belongsTo('App\specialite');
    }




}
