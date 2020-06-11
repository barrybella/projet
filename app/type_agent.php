<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_agent extends Model
{
 protected $fillable=['type_agent'];
  public function agentts()
   {
   	return $this->hasMany('App\agentt');
   }
}
