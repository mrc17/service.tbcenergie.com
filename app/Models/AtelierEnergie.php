<?php

namespace App\Models;
use App\Models\Site;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class AtelierEnergie extends Model
{
    use HasFactory;

    //relation pour recuperer le sites associée au AtelierEnergie

    public function site(){
        return $this->belongsTo(Site::class,'atl_ener_id','id');
    }
}
