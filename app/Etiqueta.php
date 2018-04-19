<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    //
    
    public function scopeSearch($query, $nombre)
    {
        return $query->where('nombre','LIKE',"%$nombre%");
    }
    
    public function empresas(){
        return $this->belongsToMany(Empresa::class);
    }
    
    public function scopeSearchEtiqueta($query,$nombre){
        return $query->where('nombre','=',$nombre);
    }
}
