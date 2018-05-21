<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    protected $table = 'organizaciones';

    public function contenido_portadas()
    {
        return $this->hasMany('App\ContenidoPortada');
    }
}
