<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    public function sites()
    {
        return $this->hasMany(Site::class, 'clustomer_id');
    }
}
