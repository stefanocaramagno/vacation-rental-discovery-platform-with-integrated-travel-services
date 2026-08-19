<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\PreferitoBranoMusicale;
use Illuminate\Support\Facades\Session;

class ApiEsterneController extends BaseController {
    
    public function fetchMeteo(Request $request) {
        $citta = trim($request->input('city'));
        $apiKey = env("API_KEY_OPEN_WEATHER_MAP");
        $url = "https://api.openweathermap.org/data/2.5/forecast?q=$citta&appid=$apiKey";
    
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
    
        if (curl_errno($curl)) {
            return response()->json(['error' => 'Errore nella richiesta meteo: ' . curl_error($curl)], 500);
        }
    
        curl_close($curl);
    
        $data = json_decode($response, true);

        return response()->json($data);
    }

    public function fetchCalendarioFestivita(Request $request) {
        $codicePaese = trim($request->input('country'));
        $anno = trim($request->input('year'));
        $apiKey = env("API_KEY_CALENDARIFIC");
        $url = "https://calendarific.com/api/v2/holidays?api_key=$apiKey&country=$codicePaese&year=$anno";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        if(curl_errno($ch)){
            return response()->json(['error' => 'Errore durante la richiesta API: ' . curl_error($ch)], 500);
        }

        curl_close($ch);

        $data = json_decode($response, true);

        return response()->json($data);
    }

    public function fetchBraniMusicali(Request $request) {
        $nomeArtista = $request->input('artist_name');
        $clientId = env("CLIENT_ID_SPOTIFY");
        $clientSecret = env("CLIENT_SECRET_SPOTIFY");
        $authUrl = 'https://accounts.spotify.com/api/token';
    
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $authUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Authorization: Basic ' . base64_encode("$clientId:$clientSecret"),
            'Content-Type: application/x-www-form-urlencoded'
        ));
    
        $result = curl_exec($curl);
        curl_close($curl);
    
        $data = json_decode($result, true);
        $accessToken = $data['access_token'];
    
        $urlRicerca = "https://api.spotify.com/v1/search?q=" . urlencode($nomeArtista) . "&type=artist";
    
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $urlRicerca);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $accessToken, 
            'Content-Type: application/json'
        ));
    
        $result = curl_exec($curl);
        curl_close($curl);
    
        $data = json_decode($result, true);
    
        if (isset($data['artists']['items'][0]['id'])) {
            $artistId = $data['artists']['items'][0]['id'];
    
            $urlBrani = "https://api.spotify.com/v1/artists/{$artistId}/top-tracks?country=US";
    
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $urlBrani);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer ' . $accessToken 
            ));
    
            $result = curl_exec($curl);
            curl_close($curl);
    
            $data = json_decode($result, true);
            return response()->json($data['tracks']);
        } else {
            return response()->json([]);
        }
    }

    public function aggiungiPreferitoBranoMusicale(Request $request) {
        if (!Session::get('user_id')) {
            return response()->json(['success' => false, 'message' => 'Per salvare i brani preferiti, devi prima effettuare l\'accesso']);
        }

        $nomeBrano = $request->query('nome_brano_musicale');
        $copertinaBrano = $request->query('copertina_brano_musicale');
        $idUtente = Session::get('user_id');
        $branoEsistente = PreferitoBranoMusicale::where('id_utente', $idUtente)->where('nome_brano_musicale', $nomeBrano)->first();

        if ($branoEsistente) {
            return response()->json(['success' => false, 'message' => 'Brano Musicale già presente nei preferiti.']);
        }

        $brano = new PreferitoBranoMusicale();
        $brano->id_utente = $idUtente;
        $brano->nome_brano_musicale = $nomeBrano;
        $brano->copertina_brano_musicale = $copertinaBrano;
        $brano->save();

        return response()->json(['success' => true, 'message' => 'Brano salvato con successo']);
    }

    public function getListaPreferitiBraniMusicali() {
        if (!Session::has('user_id')) {
            return response()->json(['success' => false, 'message' => 'Devi essere loggato per vedere i brani preferiti.']);
        }

        $idUtente = Session::get('user_id');
        $brani = PreferitoBranoMusicale::where('id_utente', $idUtente)->get();
        return response()->json($brani);
    }

    public function rimuoviPreferitoBranoMisucale(Request $request) {
        $idBrano = $request->query('id');
        $brano = PreferitoBranoMusicale::find($idBrano);

        if ($brano) {
            $brano->delete();
            return response()->json(['success' => true, 'message' => 'Brano rimosso con successo']);
        } else {
            return response()->json(['success' => false, 'message' => 'Brano non trovato']);
        }
    }

    public function fetchMappa() {
        $url = 'https://api.example.com/endpoint';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        
        if (curl_errno($curl)) {
            $error_msg = curl_error($curl);
            curl_close($curl);
            return response()->json(['error' => $error_msg], 500);
        }
        
        curl_close($curl);

        return response()->json(json_decode($response, true));
    }
}

