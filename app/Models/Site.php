<?php

namespace App\Models;

use App\Models\Ville;
use App\Models\Topologie;
use App\Models\Generateur;
use App\Models\AtelierEnergie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Site extends Model
{
    use HasFactory;

    public function ville()
    {
        return $this->belongsTo(Ville::class, 'clustomer_id'); // Correction de la clé étrangère
    }

    public function topologie()
    {
        return $this->belongsTo(Topologie::class, 'topologie_id');
    }

    // Correction de la relation avec Generateur
    public function generateur()
    {
        return $this->belongsTo(Generateur::class, 'generateurs_id', 'id'); // Correction de la clé étrangère
    }
    //relation pour recuperer la AtelierEnergie associée au site

    public function AtelierEnergie()
    {
        return $this->belongsTo(AtelierEnergie::class, 'atl_ener_id');
    }
}
