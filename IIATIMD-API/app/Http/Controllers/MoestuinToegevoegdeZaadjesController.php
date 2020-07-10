<?php

namespace App\Http\Controllers;

use App\MoestuinToegevoegdeZaadjes;
use DB;
use Illuminate\Http\Request;

class MoestuinToegevoegdeZaadjesController extends Controller
{
    public function update(){

    }
    public function index(Request $request){
        $toegevoegd = Db::table('moestuin_toegevoegde_zaadjes')
            ->where('moestuin_id', '=', $request->input('moestuin_id'))
            ->select('moestuin_toegevoegde_zaadjes.zaadjes_id', 'moestuin_toegevoegde_zaadjes.x')
            ->get();

        return json_encode($toegevoegd, JSON_FORCE_OBJECT);
    }
    public function store(Request $request){
        $moestuinZaadje = new MoestuinToegevoegdeZaadjes();

        try {

            $moestuinZaadje->moestuin_id = $request->input('moestuin_id');
            $moestuinZaadje->zaadjes_id = $request->input('zaadjes_id');
            $moestuinZaadje->x = $request->input('x');

            $moestuinZaadje->save();

        } catch (Exception $exception) {
            abort(412);
        }
    }
}
