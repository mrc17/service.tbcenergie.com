<?php

namespace App\Models;

use App\Models\Site;
use App\Models\MarqueGE;
use App\Models\MoteurGE;
use App\Models\CapaciteGE;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Generateur extends Model
{
    use HasFactory;

    public function site()
    {
        return $this->belongsTo(Site::class, 'clustomer_id'); // Correction de la clé étrangère
    }

    // Relation pour récupérer la marque associée au générateur
    public function marqueGE()
    {
        return $this->belongsTo(MarqueGE::class, 'marque_id');
    }

    //relation pour récupérer la capacite associée au genenateur

    public function capacite_g_e_s()
    {
        return $this->belongsTo(CapaciteGE::class, 'capacite_id');
    }

    //relation pour recuperer la moteur associée au genenateur

    public function moteur()
    {

        return $this->belongsTo(MoteurGE::class, 'moteur_id');
    }

}
