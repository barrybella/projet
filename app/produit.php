<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
   protected $fillable=['code_produit','nom_produit'];

   public function consultations()
   {
   	return $this->belongsToMany('App\consultation');
   }
}
