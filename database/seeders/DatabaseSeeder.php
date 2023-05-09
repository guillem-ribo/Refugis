<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //Insert Comarques
        DB::table('comarca')->insert(['nom'=>'Pallars Sobirà']);
        DB::table('comarca')->insert(['nom'=>'Cerdanya']);
        DB::table('comarca')->insert(['nom'=>'Vall d\'Aran']);
        DB::table('comarca')->insert(['nom'=>'Barcelonès']);

        //Insert Municipis
        DB::table('municipi')->insert(['nom'=>'Espot', 'comarca_id'=>1]);
        DB::table('municipi')->insert(['nom'=>'Montellà i Martinet', 'comarca_id'=>2]);
        DB::table('municipi')->insert(['nom'=>'Naut Aran', 'comarca_id'=>3]);
        DB::table('municipi')->insert(['nom'=>'Barcelona', 'comarca_id'=>4]);

        //Insert Entitats
        DB::table('entitat')->insert(['nom'=>'FEEC', 'municipi_id'=>4]);
        DB::table('entitat')->insert(['nom'=>'CE Espot', 'municipi_id'=>1]);
        DB::table('entitat')->insert(['nom'=>'CE Aran', 'municipi_id'=>3]);

        //Insert Refugis
        DB::table('refugi')->insert(['nom'=>'Prat d\'Aguiló', 'altitud'=>2365, 'guardat'=>true, 'capacitat_total'=>100, 'capacitat_actual'=>100, 'telefon'=>937261562, 'entitat_id'=>1, 'municipi_id'=>2, 'wifi'=>true, 'dutxa'=>true, 'aigua_calenta'=>true, 'mantes'=>true, 'calefaccio'=>true, 'vater'=>true]);
        DB::table('refugi')->insert(['nom'=>'Ernest Mallafré', 'altitud'=>1890, 'guardat'=>false, 'capacitat_total'=>10, 'capacitat_actual'=>10, 'telefon'=>935827493, 'entitat_id'=>2, 'municipi_id'=>1, 'wifi'=>false, 'dutxa'=>false, 'aigua_calenta'=>true, 'mantes'=>true, 'calefaccio'=>false, 'vater'=>true]);
        DB::table('refugi')->insert(['nom'=>'Colomers', 'altitud'=>2135, 'guardat'=>true, 'capacitat_total'=>50, 'capacitat_actual'=>50, 'telefon'=>936295648, 'entitat_id'=>3, 'municipi_id'=>3, 'wifi'=>true, 'dutxa'=>true, 'aigua_calenta'=>true, 'mantes'=>true, 'calefaccio'=>false, 'vater'=>true]);

        

        

        






        DB::table('users')->insert([
            'name'=>'Guillem',
            'email'=>'guillem.ribo@uvic.cat',
            'email_verified_at' => now(),
            'password' => Hash::make('guillem'),
            'remember_token' => Str::random(10),
         ]);
    }


}
