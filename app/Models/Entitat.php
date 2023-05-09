<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entitat extends Model
{
    use HasFactory;

    protected $table = "entitat";

    public function municipi() {
        return $this->belongsTo(Municipi::class);
    }

    public function refugis() {
        return $this->hasMany(Refugi::class);
    }
}
