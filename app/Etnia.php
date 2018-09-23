<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etnia extends Model
{
    public function menores()
    {
        return $this->hasMany('App\RegistroMenores');
    }
}
