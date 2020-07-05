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
            'img' => 'https://images.unsplash.com/photo-1527325752894-f1b38b396f40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80',
            'soort' => 'Groente',
        ]);
        DB::table('zaadjes')->insert([
            'name' => 'Babypompoen',
            'img' => 'https://images.unsplash.com/photo-1570586437263-ab629fccc818?ixlib=rb-1.2.1&auto=format&fit=crop&w=975&q=80',
            'soort' => 'Groente',
        ]);
        DB::table('zaadjes')->insert([
            'name' => 'Paksoi',
            'img' => 'https://images.unsplash.com/photo-1511993226957-cd166aba52d8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=943&q=80',
            'soort' => 'Groente',
        ]);
        DB::table('zaadjes')->insert([
            'name' => 'Aardbei',
            'img' => 'https://images.unsplash.com/photo-1519180392711-496e450edf6a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80',
            'soort' => 'Fruit',
        ]);
        DB::table('zaadjes')->insert([
            'name' => 'Aalbes',
            'img' => 'https://images.unsplash.com/photo-1531054871758-3cfa9fd8a3a2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=953&q=80',
            'soort' => 'Fruit',
        ]);
        DB::table('zaadjes')->insert([
            'name' => 'Blauwe bes',
            'img' => 'https://images.unsplash.com/photo-1532691126232-f80f9878fa7d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80',
            'soort' => 'Fruit',
        ]);
        DB::table('zaadjes')->insert([
            'name' => 'Reuzen Radijs',
            'img' => 'https://images.unsplash.com/photo-1593026122758-19bebc625104?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
            'soort' => 'Groente',
        ]);
        DB::table('zaadjes')->insert([
            'name' => 'Rucola',
            'img' => 'https://makkelijke-moestuin-staging.s3.amazonaws.com/9703/responsive-images/rucola-zaden-1___medialibrary_original_878_878.jpg',
            'soort' => 'Groente',
        ]);
        DB::table('zaadjes')->insert([
            'name' => 'Basilicum',
            'img' => 'https://makkelijke-moestuin-staging.s3.amazonaws.com/9939/responsive-images/Basilicum-struik-zaden-4___medialibrary_original_734_734.jpg',
            'soort' => 'Kruiden',
        ]);
        DB::table('zaadjes')->insert([
            'name' => 'Sugarsnap',
            'img' => 'https://makkelijke-moestuin-staging.s3.amazonaws.com/9973/responsive-images/sugarsnap-zaden-kopen-2___medialibrary_original_734_734.jpg',
            'soort' => 'Groente',
        ]);
        DB::table('zaadjes')->insert([
            'name' => 'Zonnebloem',
            'img' => 'https://makkelijke-moestuin-staging.s3.amazonaws.com/10149/responsive-images/zonnebloem-zaden-kopen-3___medialibrary_original_734_734.jpg',
            'soort' => 'Bloemen',
        ]);
        DB::table('zaadjes')->insert([
            'name' => 'Komkommer',
            'img' => 'https://makkelijke-moestuin-staging.s3.amazonaws.com/9816/responsive-images/komkommer-zaden-1___medialibrary_original_734_734.jpg',
            'soort' => 'Groente',
        ]);
        DB::table('zaadjes')->insert([
            'name' => 'Wortel',
            'img' => 'https://makkelijke-moestuin-staging.s3.amazonaws.com/184/responsive-images/Wortel2___medialibrary_original_819_819.jpg',
            'soort' => 'Groente',
        ]);
        DB::table('zaadjes')->insert([
            'name' => 'Spinazie',
            'img' => 'https://makkelijke-moestuin-staging.s3.amazonaws.com/9796/responsive-images/Spinazie-zaden-1___medialibrary_original_734_734.jpg',
            'soort' => 'Groente',
        ]);
        DB::table('zaadjes')->insert([
            'name' => 'Mini-kropsla',
            'img' => 'https://makkelijke-moestuin-staging.s3.amazonaws.com/9952/responsive-images/mini-kropsla-zaden-3___medialibrary_original_734_734.jpg',
            'soort' => 'Groente',
        ]);
    }
}
