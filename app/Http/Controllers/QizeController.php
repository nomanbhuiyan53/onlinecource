<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QizeController extends Controller
{
    public function QizeSetupView(){
        return view('superadmin.page.qize_setup_view');
    }
}
