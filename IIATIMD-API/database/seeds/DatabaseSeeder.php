<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SoortTableSeeder::class);
        $this->call(ZaadjesTableSeeder::class);
        $this->call(ZaadjesEigenschappenTableSeeder::class);
        $this->call(MoestuinTableSeeder::class);
        $this->call(MoestuinMatenSeeder::class);
    }
}
