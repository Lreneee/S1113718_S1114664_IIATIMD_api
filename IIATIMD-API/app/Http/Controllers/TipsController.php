<?php

namespace App\Http\Controllers;

use App\Tips;
use Illuminate\Http\Request;

class TipsController extends Controller
{
    public function index()
    {
        $tips = Tips::all();
        return json_encode($tips, JSON_FORCE_OBJECT);
    }
}
