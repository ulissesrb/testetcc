<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public function colaboradors()
    {
        return $this->hasMany('App\Colaborador');
    }
}
