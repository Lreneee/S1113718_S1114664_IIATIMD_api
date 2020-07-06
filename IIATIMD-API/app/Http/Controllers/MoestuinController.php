<?php

namespace App\Http\Controllers;

use App\Moestuin;
use Illuminate\Http\Request;
use Mockery\Exception;

class MoestuinController extends Controller
{
    public function index()
    {
        $moestuinen = Moestuin::all();
        return json_encode($moestuinen, JSON_FORCE_OBJECT);
    }

    public function store(Request $request)
    {
        $moestuin = new Moestuin();

        try {
//            $moestuin->user_id = 1;
            $moestuin->naam = $request->input('naam');
            $moestuin->moestuin_maten = $request->input('moestuin_maten');

            $moestuin->save();

        } catch (Exception $exception) {
            abort(412);
        }
    }

    public function update(Request $request)
    {

    }
}
