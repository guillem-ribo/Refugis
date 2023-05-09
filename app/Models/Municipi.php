<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipi extends Model
{
    use HasFactory;

    public $table = "municipi";

    public function comarca() {
        return $this->belongsTo(Comarca::class);
    }

    public function refugis() {
        return $this->hasMany(Refugi::class);
    }

    public function entitats() {
        return $this->hasMany(Entitat::class);
    }
}
