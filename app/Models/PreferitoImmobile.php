<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Immobile;

class PreferitoImmobile extends Model {
    
    public $timestamps = false;

    protected $table = 'PREFERITI_IMMOBILI';

    protected $fillable = [
        'id_utente', 
        'id_immobile'
    ];

    /*
    Definisce una relazione di tipo "belongsTo" tra PreferitoImmobile e Immobile. 
    Questo metodo indica che ogni record di PreferitoImmobile è associato a un singolo record 
    di Immobile tramite il campo id_immobile. 
    */

    // Definisce la relazione 1-1 (inversa): 
    // Un PreferitoImmobile è associato ad un singolo Immobile 
    // Un Immobile è associato ad un singolo PreferitoImmobile 
    public function immobile() {
        return $this->belongsTo(Immobile::class, 'id_immobile');
    }
}


