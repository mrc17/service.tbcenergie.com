<?php

namespace App\Models;

use App\Models\Site;
use App\Models\MarqueBat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Batterie extends Model
{
    use HasFactory;

    //relation pour recuperer le site associé à la batterie
    public function site()
    {
        return $this->belongsTo(Site::class, 'batterie_id');
    }

    //relation pour recuperer la marque associée à la batterie
    public function marque()
    {
        return $this->belongsTo(MarqueBat::class, 'bat_id', 'id');
    }

    //relation pour recuperer la capacite_branches associée au batterie

    public function capacitebranche()
    {
        return $this->belongsTo(CapaciteBranche::class, "capacite_id");
    }
}
