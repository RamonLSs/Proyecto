<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informacion extends Model
{
    protected $fillable = ['nombrehp','habilidadprincipal','habilidadz','nombrehu','habilidadunica','nombrehuu','habilidadunicaa'];

    public function personaje(){
        return $this->belongsTo('App\Personaje');
    }
}
