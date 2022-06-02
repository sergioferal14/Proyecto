<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable=['nombre','escudo','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function players(){
        return $this->hasMany(Player::class);
    }

    public function sesions(){
        return $this->hasMany(Sesion::class);
    }
}
