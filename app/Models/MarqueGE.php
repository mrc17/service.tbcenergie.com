<?php

namespace App\Models;

use App\Models\Generateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MarqueGE extends Model
{
    use HasFactory;

    // Relation inverse pour récupérer les generateurs associés à la marque
    public function generateurs()
    {
        return $this->hasMany(Generateur::class, "marque_id");
    }

    // Reletion inverse pour récupérer les generateurs associes à la capaicité

    public function CapaciteGenerateurs(){
        return $this->hasMany(Generateur::class,'capacite_id','capacite_g_e_s');
    }
}
