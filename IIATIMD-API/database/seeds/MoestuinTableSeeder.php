<?php

use Illuminate\Database\Seeder;

class MoestuinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('moestuin')->insert([
            'naam'=>'Irene is gewelddig',
            'moestuin_maten'=>2
        ]);
        DB::table('moestuin')->insert([
            'naam'=>'Anne ook is gewelddig',
            'moestuin_maten'=>4
        ]);
    }
}
