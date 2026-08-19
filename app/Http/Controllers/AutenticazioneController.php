<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use App\Models\Utente;
use DateTime;

class AutenticazioneController extends BaseController {

    public function getCheckEmailForm() {
        if(Session::get('user_id')) {    
            return redirect('home');
        }

        $error = Session::get('error');
        Session::forget('error');
        return view('pagina_autenticazione/check_email')->with('error', $error);
    }

    public function doCheckEmail() {
        if (Session::get('user_id')) {
            return redirect('home');
        }
    
        $email = request('email');
    
        if (empty($email)) {
            Session::put('error', 'campi_vuoti');
            return redirect('pagina_autenticazione/check_email')->withInput();
        }
    
        $utente = Utente::where('email', $email)->first();
    
        if (!$utente) {
            return redirect('pagina_autenticazione/registrazione')->with('email', $email);
        }
    
        Session::put('email', $email);
        return redirect('pagina_autenticazione/login');
    }
    
    public function getRegisterForm() {
        if(Session::get('user_id')){    
            return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error');
        return view('pagina_autenticazione/registrazione')->with('error', $error);
    }
    
    public function doRegister() {

        if(Session::get('user_id')){
            return redirect('home');
        }
    
        if(strlen(request('username')) == 0 || strlen(request('password')) == 0){
            Session::put('error', 'campi_vuoti');
            return redirect('pagina_autenticazione/registrazione')->withInput();
        }

        if(Utente::where('username', request('username'))->first()){
            Session::put('error', 'username_esistente');
            return redirect('pagina_autenticazione/registrazione')->withInput();
        }

        if(Utente::where('email', request('email'))->first()){
            Session::put('error', 'email_esistente');
            return redirect('pagina_autenticazione/registrazione')->withInput();
        }
    
        $dob = new DateTime(request('data_di_nascita'));
        $now = new DateTime();
        $age = $now->diff($dob)->y;
        if($age < 18){
            Session::put('error', 'eta_minorenne');
            return redirect('pagina_autenticazione/registrazione')->withInput();
        }

        if(request('nome')[0] !== strtoupper(request('nome')[0])){
            Session::put('error', 'inziale_nome_minuscola');
            return redirect('pagina_autenticazione/registrazione')->withInput();
        }
    
        if(request('cognome')[0] !== strtoupper(request('cognome')[0])){
            Session::put('error', 'inziale_cognome_minuscola');
            return redirect('pagina_autenticazione/registrazione')->withInput();
        }
    
        if(!preg_match('/\d/', request('password'))){
            Session::put('error', 'password_senza_numeri');
            return redirect('pagina_autenticazione/registrazione')->withInput();
        }
            
        $utente = new Utente;
        $utente->username = request('username');
        $utente->nome = request('nome');
        $utente->cognome = request('cognome');
        $utente->data_di_nascita = request('data_di_nascita');
        $utente->email = request('email');
        $utente->password = password_hash(request('password'), PASSWORD_BCRYPT);
        $utente->save();
        
        Session::put('user_id', $utente->id);
        Session::put('username', $utente->username);
    
        return redirect('home');
    }
    
    public function getLoginForm() {
        if(Session::get('user_id')){    
            return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error');
        return view('pagina_autenticazione/login')->with('error', $error);
    }

    public function doLogin() {
        $email = Session::get('email');
    
        $password = request('password');
    
        $utente = Utente::where('email', $email)->first();
    
        if (empty($password)) {
            Session::put('error', 'campi_vuoti');
            return redirect('pagina_autenticazione/login')->withInput();
        }

        if (!$utente || !password_verify($password, $utente->password)) {
            Session::put('error', 'credenziali_non_valide');
            return redirect('pagina_autenticazione/login')->withInput();
        }
    
        Session::put('user_id', $utente->id);
        Session::put('username', $utente->username);
    
        return redirect('home');
    }

    public function doLogout() {
        Session::forget('user_id');
        return redirect('home');
    }

    public function controlloUtenteLoggato() {
        $loggedIn = Session::get('user_id');
        return response()->json(['logged_in' => $loggedIn]);
    }

}