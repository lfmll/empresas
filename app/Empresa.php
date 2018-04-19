<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable=["rubro_id"];
    
    public function rubro(){
        return $this->belongsTo(Rubro::class);
    }
    
    public function etiquetas(){
        return $this->belongsToMany(Etiqueta::class);
    }
}
