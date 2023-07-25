<?php

namespace App\Models;

use App\Models\AtelierEnergie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Baie extends Model
{
    use HasFactory;

        //relation pour recuperer la Atelier d'energie associée au baies

        public function AtelierEnergies(){
            return $this->hasMany(AtelierEnergie::class,"baie_id");
        }
}
