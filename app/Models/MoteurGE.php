<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoteurGE extends Model
{
    use HasFactory;

    //Relation pour recuperer le generateur associer au moteur

    public function generateurs(){
        return $this->hasMany(MoteurGE::class,'moteur_id');
    }

}
