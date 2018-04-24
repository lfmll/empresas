<?php   

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    protected $table="etiquetas";
    protected $fillable=['nombre'];
    
    public function scopeNombre($query, $nombre)
    {        
            return $query->where('nombre','LIKE',"%$nombre%");
    }
    
    public function empresas(){
        return $this->belongsToMany('App\Empresa');
    }
    
    public function scopeSearchEtiqueta($query,$nombre){
        return $query->where('nombre','=',$nombre);
    }
}
