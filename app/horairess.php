<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horairess extends Model
{
     protected $fillable=['jours_semaine_id','heure_debut','heure_fin'];


     public function jours_semaine()
    {
    	return $this->belongsTo('App\jours_semaine');
    }
}
