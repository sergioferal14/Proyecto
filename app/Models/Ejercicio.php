<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;
    protected $fillable=['nombre','img','descripcion','njugadores','estado','tiempo','material','user_id','sesion_id','tipo_id'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sesion(){
        return $this->belongsTo(Sesion::class);
    }

    public function tipos_ejercicio(){
        return $this->belongsTo(TiposEjercicio::class);
    }

    public function scopeTipoId($query, $v){
        if($v=="-10" || !isset($v)){
            return $query->where('tipo_id', 'like', "%");
        }
        return $query->where('tipo_id' , $v);
    }

    public function scopeBusqueda($query, $search){
        if(!isset($search)){
            return $query->where('nombre', 'like', '%')->orWhere('material', 'like', '%')->orWhere('descripcion', 'like', '%');
        }
        return $query->where('nombre', 'like', "%$search%")->orWhere('material', 'like', "%$search%")->orWhere('descripcion', 'like',"%$search%");

    }
}
