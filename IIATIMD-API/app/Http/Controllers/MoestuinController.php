<?php

namespace App\Http\Controllers;

use App\Moestuin;
use Illuminate\Http\Request;

class MoestuinController extends Controller
{
    public function index(){
        return response()->json([
             Moestuin::all()
        ]);
    }
}
