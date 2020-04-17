<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    // Conectar este modelo con User indicando que
    // solo los usuarios pueden hacer ticket
    return $this->belongsTo('App\User');

    // Acceder a datos del título del tickets
    public function getTitle(){
      return $this->title
    }
}
