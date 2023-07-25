<?php

namespace App\Models;

use App\Models\Generateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MarqueGE extends Model
{
    use HasFactory;

    public function generateurs()
    {
        return $this->hasMany(Generateur::class);
    }
}
