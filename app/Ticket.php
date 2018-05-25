<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function departamento(){
        return $this->belongsTo('App\Departamento');
    }

    public function ticket_estado(){
        return $this->belongsTo('App\TicketEstado');
    }

    public function topico(){
        return $this->belongsTo('App\Topico');
    }

    public function ticket_data(){
        return $this->hasOne('App\TicketData');
    }
}
