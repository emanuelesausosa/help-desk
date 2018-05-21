<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContenidoPortada extends Model
{
    public function organizaciones(){
        return $this->belongsTo('App\Organizacion');
    }
}
