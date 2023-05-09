<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refugi extends Model
{
    use HasFactory;

    protected $table = "refugi";

    public function municipi() {
        return $this->belongsTo(Municipi::class);
    }

    public function entitat() {
        return $this->belongsTo(Entitat::class);
    }
}
