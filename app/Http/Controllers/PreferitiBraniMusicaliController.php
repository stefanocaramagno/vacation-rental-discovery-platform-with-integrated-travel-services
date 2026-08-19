<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PreferitiBraniMusicaliController extends BaseController {

    public function getPreferitiBraniMusicali() {
        return view('preferiti_brani_musicali');
    }
}