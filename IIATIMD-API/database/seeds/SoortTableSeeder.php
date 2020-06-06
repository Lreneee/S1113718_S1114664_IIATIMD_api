<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soort')->insert([
            'name' => 'Groente'
        ]);

        DB::table('soort')->insert([
            'name' => 'Fruit'
        ]);

        DB::table('soort')->insert([
            'name' => 'Kruiden'
        ]);
        DB::table('soort')->insert([
            'name' => 'Bloemen'
        ]);
    }
}
