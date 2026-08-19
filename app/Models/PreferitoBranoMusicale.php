<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreferitoBranoMusicale extends Model {

    public $timestamps = false;

    protected $table = 'PREFERITI_BRANI_MUSICALI'; 

    protected $fillable = [
        'id_utente',
        'nome_brano_musicale', 
        'copertina_brano_musicale'
    ];
}