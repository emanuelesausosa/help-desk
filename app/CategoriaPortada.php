<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaPortada extends Model
{
    public function contenido_portadas()
    {
        return $this->hasMany('App\ContenidoPortada');
    }
}
