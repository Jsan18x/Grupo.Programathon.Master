<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroMenores extends Model
{
    protected $fillable = ['nombre','cedula','edad','genero','tratamientos','enfermedades'];
    public function etnia()
    {
        return $this->belongsTo('App\Etnia');
    }
    public function parentesco()
    {
        return $this->belongsTo('App\Parentesco');
    }
}
