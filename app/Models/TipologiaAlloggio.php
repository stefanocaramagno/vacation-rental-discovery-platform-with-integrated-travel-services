<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipologiaAlloggio extends Model {
    
    protected $table = 'TIPOLOGIE_ALLOGGIO';
   
    protected $fillable = [
        'immagine', 
        'alt', 
        'tipologia'
    ];
}