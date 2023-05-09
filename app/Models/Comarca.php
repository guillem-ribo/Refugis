<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comarca extends Model
{
    use HasFactory;

    public $table = "comarca";

    public function municipis() {
        return $this->hasMany(Municipi::class);
    }
}
