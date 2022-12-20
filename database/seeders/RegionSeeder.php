<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use database\factories\RegionFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this -> call(RegionFactory::class);

        DB::table('regiones')->insert([
            'numero' => 1,
            'nombre' => 'Arica y Parinacota',
        ]);
        // DB::table('regiones')->insert([
        //     'numero' => 1,
        //     'nombre' => 'Arica y Parinacota',
        // ],
        // [
        //     'numero' => 2,
        //     'nombre' => 'Tarapaca',
        // ],
        // [
        //     'numero' => 3,
        //     'nombre' => 'Antofagasta',
        // ],
        // [
        //     'numero' => 4,
        //     'nombre' => 'Atacama',
        // ],
        // [
        //     'numero' => 5,
        //     'nombre' => 'Coquimbo',
        // ],
        // [
        //     'numero' => 6,
        //     'nombre' => 'Valparaiso',
        // ],
        // [
        //     'numero' => 7,
        //     'nombre' => 'Metropolitana',
        // ],
        // [
        //     'numero' => 8,
        //     'nombre' => 'O Higgins',
        // ],
        // [
        //     'numero' => 9,
        //     'nombre' => 'Maule',
        // ],
        // [
        //     'numero' => 10,
        //     'nombre' => 'Nuble',
        // ],
        // [
        //     'numero' => 11,
        //     'nombre' => 'Biobio',
        // ],
        // [
        //     'numero' => 12,
        //     'nombre' => 'Araucania',
        // ],
        // [
        //     'numero' => 13,
        //     'nombre' => 'Los Rios',
        // ],
        // [
        //     'numero' => 14,
        //     'nombre' => 'Los Lagos',
        // ],
        // [
        //     'numero' => 15,
        //     'nombre' => 'Aysen',
        // ],
        // [
        //     'numero' => 16,
        //     'nombre' => 'Magallanes',
        // ]);
    }
}
