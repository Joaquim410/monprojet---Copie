<?php

namespace Database\Seeders;

use App\Models\Auteurs;
use Database\Factories\AuteursFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auteurs')->insert([

            'nom' => Str::random(10),
            'prenom' => Str::random(10),
            
        ]);

                Auteurs::factory(5)->create();

        
        
        
    }
}
