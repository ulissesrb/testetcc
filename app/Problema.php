<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problema extends Model
{
    protected $dates = ['excluded_at'];

    public function colaboradors()
    {
        return $this->belongsToMany('App\Colaborador');
    }
}
