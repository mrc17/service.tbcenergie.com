<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Affichage de la page de site
    public function siteAllShow()
    {
        // Récuperation des informations des sites
        $allSites = Site::all();

        $count=1;
        return view('Auth.site', ['allSites' => $allSites,'count'=>$count]);
    }
}
