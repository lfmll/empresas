<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    public function empresa(){
        return $this->hasMany('App\Empresa');
    }
    
    public function scopeSearchRubro($query,$nombre){
        return $query->where('nombre','=',$nombre);
    }
}
