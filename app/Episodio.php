<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{

    protected $fillable = ['nombre'];

    public function personajes(){
        return $this->belongsToMany('App\Personaje');
    }
}
