<?php

namespace App\Http\Controllers;

use App\Zaadjes;
use Illuminate\Http\Request;

class ZaadjesController extends Controller
{
    public function index(){
        $zaadjes =  Zaadjes::all();

        return json_encode($zaadjes, JSON_FORCE_OBJECT);
    }
}
