<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    protected $fillable = ['nombre','rareza','color','tipo','imagen'];

    public function informacion(){
        return $this->belongsTo('App\Informacion');
    }

    public function tag(){
        return $this->belongsTo('App\Tag');
    }

    public function episodio(){
        return $this->belongsTo('App\Episodio');
    }

    public function estadistica(){
        return $this->belongsTo('App\Estadistica');
    }

    public function scopeRareza($query, $v){
        if(!isset($v)){
            return $query->where('rareza','like','%');
        }
        if($v =='%'){
            return $query->where('rareza','like',$v);
        }
        return $query->where('rareza',$v);
    }

    public function scopeColor($query, $v){
        if(!isset($v)){
            return $query->where('color','like','%');
        }
        if($v =='%'){
            return $query->where('color','like',$v);
        }
        return $query->where('color',$v);
    }

    public function scopeEpisodio($query, $v){
        if(!isset($v) || $v == null){
            return $query->where('nombre','like','%');
        }
        if($v =='%'){
            return $query->where('episodio_id','like',$v);
        }
        return $query->where('episodio_id',$v);
    }

}
