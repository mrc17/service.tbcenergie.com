<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Http\Requests\SearchRequest;

class SiteController extends Controller
{
    // Affichage de la page de site
    public function siteAllShow()
    {
        // Récuperation des informations des sites
        $allSites = Site::all();
        $count = 1;
        return view('Auth.site', ['allSites' => $allSites, 'count' => $count]);
    }

    public function search(SearchRequest $request)
    {
        $sites = Site::where('matricule', $request->input('search'))
            ->orWhere('nom', $request->input('search'))
            ->get();

        if ($sites) {
            $count = 1;
            return view('Auth.site', ['allSites' => $sites, 'count' => $count]);
        } else {
            return redirect('site')->with('error', 'Aucun site n\'a été trouvé');
        }
    }
}
