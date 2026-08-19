<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Immobile extends Model {
    
    protected $table = 'IMMOBILI';

    protected $fillable = [
        'tipologia',
        'luogo',
        'tipologia_host',
        'intervallo_date',
        'prezzo',
        'amato_dagli_ospiti',
        'immagine1',
        'immagine2',
        'immagine3',
        'immagine4',
        'immagine5',
        'immagine6',
        'immagine7',
        'immagine8',
        'immagine9'
    ];
}