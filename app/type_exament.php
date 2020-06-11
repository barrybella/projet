<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_exament extends Model
{
   protected $fillable=['type_exament'];
   
   public function consultations()
   {
   	return $this->belongsToMany('App\consultation');
   }
}
