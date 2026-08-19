<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AffittaController extends BaseController {

    public function getAffitta() {
        return view('affitta');
    }
}