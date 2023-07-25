<?php

namespace App\Models;

use App\Models\Baie;
use App\Models\Site;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AtelierEnergie extends Model
{
    use HasFactory;

    //relation pour recuperer le sites associée au AtelierEnergie

    public function site()
    {
        return $this->belongsTo(Site::class, 'atl_ener_id', 'id');
    }

    //relation pour recuperer la baie associée au  Atelier d'energie
    public function baies()
    {
        return $this->belongsTo(Baie::class,"baie_id",'id');
    }
}
