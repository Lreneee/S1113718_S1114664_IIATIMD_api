<?php

namespace App\Http\Controllers;

use App\MoestuinMaten;
use Illuminate\Http\Request;

class MoestuinMatenController extends Controller
{
    public function index(){
        $moestuinen =  MoestuinMaten::all();

        return json_encode($moestuinen, JSON_FORCE_OBJECT);
    }
}
