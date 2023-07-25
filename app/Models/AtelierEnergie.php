<?php

namespace App\Models;
use App\Models\Generateur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtelierEnergie extends Model
{
    use HasFactory;

    //relation pour recuperer le genenateur associée au AtelierEnergie

    public function Generateurs(){
        return $this->hasMany(Generateur::class,'atl_ener_id');
    }
}
