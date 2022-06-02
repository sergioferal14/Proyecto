<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable=['nombre','apellidos','posicion','team_id','peso','dorsal','altura','edad','foto','observaciones'];

    public function team(){
        return $this->belongsTo(Team::class);
    }

    public function scopeNombre($query, $search){
        if(!isset($search)){
            return $query->where('nombre', 'like', '%')->orWhere('apellidos', 'like', '%')->orWhere('dorsal', 'like', '%');
        }
        return $query->where('nombre', 'like', "%$search%")->orWhere('apellidos', 'like', "%$search%")->orWhere('dorsal', 'like',"%$search%");

    }

}
