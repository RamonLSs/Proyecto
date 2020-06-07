<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadistica extends Model
{
    protected $fillable = ['niveldepoder','salud','ataquefisico','ataquedeki','defensafisica','defensadeki','critico','velocidadderecuperaciondeki','ranurasdeequipamiento'];

    public function personaje(){
        return $this->belongsTo('App\Personaje');
    }
}
