<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\PreferitoImmobile;
use App\Models\Utente;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PreferitiImmobiliController extends BaseController {

    public function getPreferitiImmobili() {
        return view('preferiti_immobili');
    }

    public function getListaImmobiliPreferiti() {
        $user_id = Session::get('user_id');

        if ($user_id) {
            $utente = Utente::find($user_id);

            if ($utente) {
                $immobili = $utente->preferiti()->with('immobile')->get()->pluck('immobile');
                return response()->json($immobili);
            } else {
                return response()->json(['error' => 'Utente non trovato.'], 404);
            }
        } else {
            return response()->json(['error' => 'Non hai effettuato l\'accesso.'], 401);
        }
    }

    public function aggiungiPreferitoImmobile(Request $request) {
        $user_id = Session::get('user_id');

        if ($user_id) {
            $utente = Utente::find($user_id);
            $immobile_id = $request->input('immobile_id');

            if ($utente && $immobile_id) {
                $existing = PreferitoImmobile::where('id_utente', $utente->id)->where('id_immobile', $immobile_id)->first();
                if (!$existing) {
                    $preferito = new PreferitoImmobile();
                    $preferito->id_utente = $utente->id;
                    $preferito->id_immobile = $immobile_id;
                    $preferito->save();

                    return response()->json(['message' => 'L\'immobile è stato aggiunto ai preferiti.']);
                } else {
                    return response()->json(['message' => 'L\'immobile è già nei preferiti.']);
                }
            } else {
                return response()->json(['error' => 'Nessun immobile selezionato o utente non trovato.'], 400);
            }
        } else {
            return response()->json(['error' => 'Non hai effettuato l\'accesso.'], 401);
        }
    }

    public function rimuoviPreferitoImmobile($immobileId) {
        $user_id = Session::get('user_id');

        if ($user_id) {
            $preferito = PreferitoImmobile::where('id_utente', $user_id)->where('id_immobile', $immobileId)->first();
            if ($preferito) {
                $preferito->delete();
                return response()->json(['message' => 'L\'immobile è stato rimosso dai preferiti.']);
            } else {
                return response()->json(['message' => 'L\'immobile non è presente nei preferiti.']);
            }
        } else {
            return response()->json(['error' => 'Non hai effettuato l\'accesso.'], 401);
        }
    }
}