<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utente extends Model {

    public $timestamps = false;

    protected $table = 'UTENTI';

    protected $fillable = [
        'username',
        'nome',
        'cognome',
        'data_di_nascita',
        'email',
        'password',
    ];

    // Definisce la relazione 1-N: un Utente ha molti PreferitoImmobile
    public function preferiti() {
        return $this->hasMany(PreferitoImmobile::class, 'id_utente');
    }

}
