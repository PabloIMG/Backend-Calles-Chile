<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::create(['numero' => 1, 'nombre' => 'Arica y Parinacota']);
        Region::create(['numero' => 2, 'nombre' => 'Tarapaca']);
        Region::create(['numero' => 3, 'nombre' => 'Antofagasta']);
        Region::create(['numero' => 4, 'nombre' => 'Atacama']);
        Region::create(['numero' => 5, 'nombre' => 'Coquimbo']);
        Region::create(['numero' => 6, 'nombre' => 'Valparaiso']);
        Region::create(['numero' => 7, 'nombre' => 'Metropolitana de Santiago']);
        Region::create(['numero' => 8, 'nombre' => 'Libertador General Bernardo OHiggins']);
        Region::create(['numero' => 9, 'nombre' => 'Maule']);
        Region::create(['numero' => 10, 'nombre' => 'Nuble']);
        Region::create(['numero' => 11, 'nombre' => 'Biobio']);
        Region::create(['numero' => 12, 'nombre' => 'La Araucania']);
        Region::create(['numero' => 13, 'nombre' => 'Los Rios']);
        Region::create(['numero' => 14, 'nombre' => 'Los Lagos']);
        Region::create(['numero' => 15, 'nombre' => 'Aysen del General Carlos Ibanez del Campo']);
        Region::create(['numero' => 16, 'nombre' => 'Magallanes y de la Antartica Chilena']);
    }
}
