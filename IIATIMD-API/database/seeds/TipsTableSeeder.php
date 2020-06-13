<?php

use Illuminate\Database\Seeder;

class TipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tips')->insert([
            'title'=>'Goed zaaien',
            'short_description'=>'De meeste groenten en fruit hebben ruimte nodig om te groeien. Heb jij geen plek in de volle grond? Zaai de zaadjes in een grote pot of bak',
            'long_description'=>'De meeste groenten en fruit hebben ruimte nodig om te groeien. Uiteindelijk zal je de gekiemde plantjes moeten verspenen of uitdunnen. Heb jij geen plek in de volle grond? Zaai de zaadjes in een grote pot of bak. Of nog beter: gebruik een kweektafel. Daarin hebben de planten genoeg ruimte en werk je op een prettige hoogte (geen pijn aan je knieën!). Daarnaast groeit er minder onkruid in en heb je minder last van slakken. Helemaal fijn: in een bak groeien groenten sneller dan in de volle grond. Ga bijvoorbeeld voor een duurzaam exemplaar, zoals de kweektafel van Elho. Deze is gemaakt van gerecycled kunststof.',
        ]);
    }
}
