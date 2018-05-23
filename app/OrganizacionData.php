<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrganizacionData extends Model
{
    protected $table = 'organizacion_data';

    public function orgnizacion()
    {
        return $this->belongsTo('App\Organizacion');
    }
}
