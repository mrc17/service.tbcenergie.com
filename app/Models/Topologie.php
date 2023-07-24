<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topologie extends Model
{
    use HasFactory;


    public function sites(){
        return $this->hasMany(site::class,'topologie_id');
    }

}
