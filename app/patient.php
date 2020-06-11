<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
  protected $fillable=['nom','prenom','date_naissance','lieu_naissance','genre','profession','statut_matrimonial','quartier','telephone'];
}
