<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class droit extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user','grade'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }
}
