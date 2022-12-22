<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provincia;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::create(['nombre' => 'Arica', 'region_id' => 1]);
        Provincia::create(['nombre' => 'Parinacota', 'region_id' => 1]);
        Provincia::create(['nombre' => 'Iquique', 'region_id' => 2]);
        Provincia::create(['nombre' => 'El Tamarugal', 'region_id' => 2]);
        Provincia::create(['nombre' => 'Tocopilla', 'region_id' => 3]);
        Provincia::create(['nombre' => 'Antofagasta', 'region_id' => 3]);
        Provincia::create(['nombre' => 'Copiapo', 'region_id' => 4]);
        Provincia::create(['nombre' => 'Huasco', 'region_id' => 4]);
        Provincia::create(['nombre' => 'Elqui', 'region_id' => 5]);
        Provincia::create(['nombre' => 'Choapa', 'region_id' => 5]);
        Provincia::create(['nombre' => 'Los Andes', 'region_id' => 6]);
        Provincia::create(['nombre' => 'Isla de Pascua', 'region_id' => 6]);
        Provincia::create(['nombre' => 'Santiago', 'region_id' => 7]);
        Provincia::create(['nombre' => 'Melipilla', 'region_id' => 7]);
        Provincia::create(['nombre' => 'Colchagua', 'region_id' => 8]);
        Provincia::create(['nombre' => 'Cardenal Caro', 'region_id' => 8]);
        Provincia::create(['nombre' => 'Curico', 'region_id' => 9]);
        Provincia::create(['nombre' => 'Talca', 'region_id' => 9]);
        Provincia::create(['nombre' => 'Diguillin', 'region_id' => 10]);
        Provincia::create(['nombre' => 'Itata', 'region_id' => 10]);
        Provincia::create(['nombre' => 'Concepcion', 'region_id' => 11]);
        Provincia::create(['nombre' => 'Arauco', 'region_id' => 11]);
        Provincia::create(['nombre' => 'Malleco', 'region_id' => 12]);
        Provincia::create(['nombre' => 'Cautin', 'region_id' => 12]);
        Provincia::create(['nombre' => 'Valdivia', 'region_id' => 13]);
        Provincia::create(['nombre' => 'Ranco', 'region_id' => 13]);
        Provincia::create(['nombre' => 'Llanquihue', 'region_id' => 14]);
        Provincia::create(['nombre' => 'Chiloe', 'region_id' => 14]);
        Provincia::create(['nombre' => 'Coyhaique', 'region_id' => 15]);
        Provincia::create(['nombre' => 'Aysen', 'region_id' => 15]);
        Provincia::create(['nombre' => 'Tierra del Fuego', 'region_id' => 16]);
        Provincia::create(['nombre' => 'Antartica Chilena', 'region_id' => 16]);
    }
}
