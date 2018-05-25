<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketPrioridad extends Model
{
    protected $table = 'ticket_prioridades';

    public function topicos(){
        return $this->hasMany('App\Topico');
    }
}
