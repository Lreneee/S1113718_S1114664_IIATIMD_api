<?php

use Illuminate\Database\Seeder;

class ZaadjesEigenschappenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zaadjes_eigenschappen')->insert([
            'aantal_zaadjes_in_vak' => 1,
            'begin_zaaitijd' => 'eind maart-half april',
            'eind_zaaitijd' => 'Half mei',
            'hoogte' => 37.5,
        ]);
        DB::table('zaadjes_eigenschappen')->insert([
            'aantal_zaadjes_in_vak' => 1,
            'begin_zaaitijd' => 'eind april tot eind mei',
            'hoogte' => 200,
        ]);
        DB::table('zaadjes_eigenschappen')->insert([
            'aantal_zaadjes_in_vak' => 4,
            'begin_zaaitijd' => 'half maart-mei',
            'eind_zaaitijd' => 'juli/augustus',
            'hoogte' => 20,
        ]);
    }
}
