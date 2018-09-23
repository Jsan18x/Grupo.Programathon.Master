<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    public function menores()
    {
        return $this->hasMany('App\RegistroMenores');
    }
}
