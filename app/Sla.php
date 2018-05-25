<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sla extends Model
{
    public function topicos(){
            return $this->hasMany('App\Topico');
    }
}
