<?php

namespace App\Http\Controllers;

use App\Moestuin;
use DB;
use Illuminate\Http\Request;
use Mockery\Exception;

class MoestuinController extends Controller
{
    public function index()
    {

        $moestuin = DB::table('moestuin')
            ->join('moestuinen_maten', 'moestuin.moestuin_maten', 'moestuinen_maten.id')
            ->select('moestuin.moestuin_id', 'moestuinen_maten.img', 'moestuin.naam','moestuinen_maten.lengte_in_vakjes AS moestuin_lengte', 'moestuinen_maten.breedte_in_vakjes AS moestuin_breedte')
            ->get();


        return json_encode($moestuin, JSON_FORCE_OBJECT);
    }
    public function getMoestuin(Request $request){
        $moestuin = DB::table('moestuin')
            ->where('moestuin_id', '=', $request->input('moestuin_id'))
            ->join('moestuinen_maten', 'moestuin.moestuin_maten', 'moestuinen_maten.id')
            ->select('moestuin.moestuin_id', 'moestuin.naam', 'moestuinen_maten.img', 'moestuinen_maten.lengte_in_vakjes', 'moestuinen_maten.breedte_in_vakjes')
            ->get();
        return json_encode($moestuin, JSON_FORCE_OBJECT);

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
