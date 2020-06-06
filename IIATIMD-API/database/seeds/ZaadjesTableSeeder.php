<?php

use Illuminate\Database\Seeder;

class ZaadjesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zaadjes')->insert([
            'name' => 'Struiktomaat',
            'img' => 'https://makkelijke-moestuin-staging.s3.amazonaws.com/9979/responsive-images/Gele-struik-tomaat-zaden-kopen-2___medialibrary_original_878_878.jpg',
            'soort' => 'Groente',
        ]);
    }
}
