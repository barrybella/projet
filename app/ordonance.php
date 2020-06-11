<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ordonance extends Model
{
  
   protected $fillable=['ordonance_id','date'];

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
     public function consultation()
    {
        return $this->belongsTo('App\consultation');
    }
    
    public function produits()
    {
        return $this->belongsToMany('App\produit')->withPivot('quantite','utilisation');
    }
     public function type_examents()
    {
        return $this->belongsToMany('App\type_exament')->withPivot('date');
    }
     public function agentts()
    {
        return $this->belongsTo('App\agentt')->withPivot('date');
    }

}

