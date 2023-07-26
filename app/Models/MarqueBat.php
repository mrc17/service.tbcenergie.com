<?php

namespace App\Models;

use App\Models\Batterie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MarqueBat extends Model
{
    use HasFactory;

    //relation pour recuperer les batteries associées à la marque
    public function batteries()
    {
        return $this->hasMany(Batterie::class, 'bat_id', 'id');
    }
}
