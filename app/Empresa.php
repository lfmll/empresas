<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table="empresas";
    protected $fillable=["nombre","rubro_id"];
    
    public function rubro(){
        return $this->belongsTo('App\Rubro');
    }
    
    public function etiquetas(){
        return $this->belongsToMany('App\Etiqueta');
    }
    
    public function scopeNombre($query,$nombre){
        if ($nombre)
            return $query->where('nombre','LIKE',"%$nombre%");
    }
    
}
