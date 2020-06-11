<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resultats_exament extends Model
{
    protected $fillable=['exament_id','description'];
    public function patient()
    {
    	return $this->belongsTo('App\patient');
    }
     public function agentt()
    {
    	return $this->belongsTo('App\agentt');
    }
     public function exament()
    {
    	return $this->belongsTo('App\exament');
    }
     public function consultation()
    {
        return $this->belongsTo('App\consultation');
    }
}
