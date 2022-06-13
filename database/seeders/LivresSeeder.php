<?php

namespace Database\Seeders;

use App\Models\Auteurs;
use Database\Factories\LivresFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LivresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livres')->insert([
            
            'titre' => Str::random(10),
            'extrait' => Str::random(10),
            'auteur_id' => Auteurs::all()->random()->id,
            
        ]);
        
        LivresFactory::factory(5)->create();
    }   
}
