<?php

namespace App\Models;

use App\Models\Ville;
use App\Models\Topologie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Site extends Model
{
    use HasFactory;

    public function ville()
    {
        return $this->belongsTo(Ville::class, 'clustomer_id',);
    }

    public function Topologie(){
        return $this->belongsTo(Topologie::class,'topologie_id');
    }

}
