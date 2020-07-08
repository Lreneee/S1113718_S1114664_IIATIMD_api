<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoestuinMatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('moestuinen_maten')->insert([
            'img' => 'http://irenedekoning.nl/img/120x120.png',
            'lengte_in_cm' => '120',
            'lengte_in_vakjes' => '4',
            'breedte_in_cm' => '120',
            'breedte_in_vakjes' => '4',
        ]);
        DB::table('moestuinen_maten')->insert([
            'img' => 'http://irenedekoning.nl/img/120x60.png',
            'lengte_in_cm' => '120',
            'lengte_in_vakjes' => '4',
            'breedte_in_cm' => '60',
            'breedte_in_vakjes' => '2',
        ]);
        DB::table('moestuinen_maten')->insert([
            'img' => 'http://irenedekoning.nl/img/90x90.png',
            'lengte_in_cm' => '90',
            'lengte_in_vakjes' => '3',
            'breedte_in_cm' => '90',
            'breedte_in_vakjes' => '3',
        ]);
        DB::table('moestuinen_maten')->insert([
            'img' => 'http://irenedekoning.nl/img/120x90.png',
            'lengte_in_cm' => '120',
            'lengte_in_vakjes' => '4',
            'breedte_in_cm' => '90',
            'breedte_in_vakjes' => '3',
        ]);
        DB::table('moestuinen_maten')->insert([
            'img' => 'http://irenedekoning.nl/img/90x60.png',
            'lengte_in_cm' => '90',
            'lengte_in_vakjes' => '3',
            'breedte_in_cm' => '60',
            'breedte_in_vakjes' => '2',
        ]);
        DB::table('moestuinen_maten')->insert([
            'img' => 'http://irenedekoning.nl/img/60x60.png',
            'lengte_in_cm' => '60',
            'lengte_in_vakjes' => '2',
            'breedte_in_cm' => '60',
            'breedte_in_vakjes' => '2',
        ]);
        DB::table('moestuinen_maten')->insert([
            'img' => 'http://irenedekoning.nl/img/30x30.png',
            'lengte_in_cm' => '30',
            'lengte_in_vakjes' => '1',
            'breedte_in_cm' => '30',
            'breedte_in_vakjes' => '1',
        ]);
    }
}
