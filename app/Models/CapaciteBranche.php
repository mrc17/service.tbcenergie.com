<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapaciteBranche extends Model
{
    use HasFactory;
    //relation pour recuperer la batterie  associée au capacite_branches
    public function batteries(){
        return $this->hasMany(Batterie::class,'capacite_id','id');
    }
}
