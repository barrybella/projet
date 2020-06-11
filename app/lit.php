<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lit extends Model
{
    protected $fillable=['numero_lit','id_salle'];
    public function salle()
    {
    	return $this->belongsTo('App\salle');
    }
}
