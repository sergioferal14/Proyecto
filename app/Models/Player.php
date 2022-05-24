<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable=['nombre','apellidos','posicion','team_id','peso','dorsal','altura','edad','foto'];

    public function team(){
        return $this->belongsTo(Team::class);
    }

}
