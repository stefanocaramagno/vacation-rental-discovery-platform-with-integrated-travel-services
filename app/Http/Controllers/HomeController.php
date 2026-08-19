<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Immobile;
use App\Models\TipologiaAlloggio;

class HomeController extends BaseController {

    public function getHome() {
        return view('home');
    }

    public function getTipologieAlloggio() {
        $tipologieAlloggio = TipologiaAlloggio::all();

        return response()->json($tipologieAlloggio);
    }

    public function getImmobili(Request $request) {
        $tipologia = $request->input('tipologia');
    
        $query = Immobile::where('tipologia', $tipologia)->get();
    
        return response()->json($query);
    }
    
}


