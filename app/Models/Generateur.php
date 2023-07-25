<?php

namespace App\Models;

use App\Models\Site;
use App\Models\MarqueGE;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Generateur extends Model
{
    use HasFactory;

    public function site()
    {
        return $this->belongsTo(Site::class, 'clustomer_id'); // Correction de la clé étrangère
    }


    public function marqueGE()
    {
        return $this->belongsTo(MarqueGE::class,'');
    }
}
