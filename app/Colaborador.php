<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Colaborador extends Authenticatable
{
    public function empresa()
    {
        return $this->belongsTo('App\Empresa');
    }

    public function problemas()
    {
        return $this->belongsToMany('App\Problema');
    }
}
