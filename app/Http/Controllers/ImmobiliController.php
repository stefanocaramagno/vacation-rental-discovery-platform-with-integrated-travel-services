<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Immobile;

class ImmobiliController extends BaseController {

    public function getImmobile($id) {
        $immobile = Immobile::find($id);
        
        if (!$immobile) {
            return response()->json(['error' => 'Immobile non trovato'], 404);
        }
       
        return view('immobile', ['immobile' => $immobile]);
    }

    public function getInformazioniImmobile($id) {

        if ($id > 0) {
            $immobile = Immobile::find($id);

            if ($immobile) {
                return response()->json(['data' => $immobile]);
            } else {
                return response()->json(['error' => 'Immobile non trovato'], 404);
            }
        } else {
            return response()->json(['error' => 'ID immobile non valido'], 400);
        }
    }
}

