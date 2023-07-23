<?php

namespace App\Http\Controllers;

use App\Models\droit;
use Illuminate\Http\Request;

class droitController extends Controller
{
    //Attribution des permissions au users après inscription
    public function registerattribution(Request $request){
        $request->validate([
            'id' => 'required|numeric',
            'droit' => 'required|numeric',
        ]);
        
        $droit=droit::create([
        'id_user' => $request->id,
        'grade' => $request->droit
    ]);
    return redirect('/user/create')->with([
        'success' => 'utilisateur enregistré avec succès.']);
    }
}
