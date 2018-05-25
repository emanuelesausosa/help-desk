<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topico extends Model
{
    public function sla() {
        return $this->belongsTo('App\Sla');
    }

    public function ticket_prioridad() {
        return $this->belongsTo('App\TicketPrioridad');
    }

    public function tickets(){
        return $this->hasMany('App\Ticket');
    }
}
