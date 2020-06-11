<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resulta_examen extends Model
{
    protected $fillable=['exament_id','description'];
     public function exament()
    {
    	return $this->belongsTo('App\exament');
    }
    public function type_exament()
    {
    	return $this->belongsTo('App\type_exament');
    }
      public function consultation()
    {
    	return $this->belongsTo('App\consultation');
    }
}
