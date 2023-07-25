<?php

namespace App\Models;

use App\Models\Generateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CapaciteGE extends Model
{
    use HasFactory;

    // Relation inverse pour récupérer les generateurs associés à la marque
    public function generateurs()
    {
        return $this->hasMany(Generateur::class, "marque_id");
    }
}

