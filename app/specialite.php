<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class specialite extends Model
{
   protected $fillable=['specialite'];

   public function agentts()
   {
   	return $this->hasMany('App\agentt');
   }
}
