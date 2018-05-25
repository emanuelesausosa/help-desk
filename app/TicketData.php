<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketData extends Model
{
    protected $table = "ticket_data";

    public function TicketPrioridad(){
        return $this->belongsTo('App\TicketPrioridad');
    }

    public function ticket(){
        return $this->belongsTo('App\Ticket');
    }
}
