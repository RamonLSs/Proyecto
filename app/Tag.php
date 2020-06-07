<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nombre'];

    public function personajes(){
        return $this->belongsToMany('App\Personaje');
    }
}
