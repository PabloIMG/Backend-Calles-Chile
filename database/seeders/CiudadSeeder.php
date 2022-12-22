<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ciudad;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudad::create(['nombre' => 'Arica', 'provincia_id' => 1]);
        Ciudad::create(['nombre' => 'Camarones', 'provincia_id' => 1]);
        Ciudad::create(['nombre' => 'General Lagos', 'provincia_id' => 2]);
        Ciudad::create(['nombre' => 'Putre', 'provincia_id' => 2]);
        Ciudad::create(['nombre' => 'Alto Hospicio', 'provincia_id' => 3]);
        Ciudad::create(['nombre' => 'Iquique', 'provincia_id' => 3]);
        Ciudad::create(['nombre' => 'Colchane', 'provincia_id' => 4]);
        Ciudad::create(['nombre' => 'Pozo Almonte', 'provincia_id' => 4]);
        Ciudad::create(['nombre' => 'Tocopilla', 'provincia_id' => 5]);
        Ciudad::create(['nombre' => 'Maria Elena', 'provincia_id' => 5]);
        Ciudad::create(['nombre' => 'San Pedro de Atacama', 'provincia_id' => 6]);
        Ciudad::create(['nombre' => 'Antofagasta', 'provincia_id' => 6]);
        Ciudad::create(['nombre' => 'Chanaral', 'provincia_id' => 7]);
        Ciudad::create(['nombre' => 'Vallenar', 'provincia_id' => 7]);
        Ciudad::create(['nombre' => 'Alto del Carmen', 'provincia_id' => 8]);
        Ciudad::create(['nombre' => 'Huasco bajo', 'provincia_id' => 8]);
        Ciudad::create(['nombre' => 'La Serena', 'provincia_id' => 9]);
        Ciudad::create(['nombre' => 'Coquimbo', 'provincia_id' => 9]);
        Ciudad::create(['nombre' => 'Illapel', 'provincia_id' => 10]);
        Ciudad::create(['nombre' => 'Los Vilos', 'provincia_id' => 10]);
        Ciudad::create(['nombre' => 'Andes', 'provincia_id' => 11]);
        Ciudad::create(['nombre' => 'Centro', 'provincia_id' => 11]);
        Ciudad::create(['nombre' => 'Centro', 'provincia_id' => 12]);
        Ciudad::create(['nombre' => 'Isla', 'provincia_id' => 12]);
        Ciudad::create(['nombre' => 'Renca', 'provincia_id' => 13]);
        Ciudad::create(['nombre' => 'Vitacura', 'provincia_id' => 13]);
        Ciudad::create(['nombre' => 'Cerrillos', 'provincia_id' => 14]);
        Ciudad::create(['nombre' => 'Cerro Navia', 'provincia_id' => 14]);
        Ciudad::create(['nombre' => 'Melipilla', 'provincia_id' => 15]);
        Ciudad::create(['nombre' => 'Santa Cruz', 'provincia_id' => 15]);
        Ciudad::create(['nombre' => 'Pichilemu', 'provincia_id' => 16]);
        Ciudad::create(['nombre' => 'Paredones', 'provincia_id' => 16]);
        Ciudad::create(['nombre' => 'Curico', 'provincia_id' => 17]);
        Ciudad::create(['nombre' => 'Teno', 'provincia_id' => 17]);
        Ciudad::create(['nombre' => 'Talca', 'provincia_id' => 18]);
        Ciudad::create(['nombre' => 'San Clemente', 'provincia_id' => 18]);
        Ciudad::create(['nombre' => 'Yungay', 'provincia_id' => 19]);
        Ciudad::create(['nombre' => 'Chillan', 'provincia_id' => 19]);
        Ciudad::create(['nombre' => 'Coelemu', 'provincia_id' => 20]);
        Ciudad::create(['nombre' => 'Treguaco', 'provincia_id' => 20]);
        Ciudad::create(['nombre' => 'San Pedro de la Paz', 'provincia_id' => 21]);
        Ciudad::create(['nombre' => 'Chiguayante', 'provincia_id' => 21]);
        Ciudad::create(['nombre' => 'Cerro Alto', 'provincia_id' => 22]);
        Ciudad::create(['nombre' => 'Canete', 'provincia_id' => 22]);
        Ciudad::create(['nombre' => 'Puren', 'provincia_id' => 23]);
        Ciudad::create(['nombre' => 'Lumaco', 'provincia_id' => 23]);
        Ciudad::create(['nombre' => 'Temuco', 'provincia_id' => 24]);
        Ciudad::create(['nombre' => 'Villarica', 'provincia_id' => 24]);
        Ciudad::create(['nombre' => 'Valdivia', 'provincia_id' => 25]);
        Ciudad::create(['nombre' => 'Panguipulli', 'provincia_id' => 25]);
        Ciudad::create(['nombre' => 'Rio Bueno', 'provincia_id' => 26]);
        Ciudad::create(['nombre' => 'Lago Ranco', 'provincia_id' => 26]);
        Ciudad::create(['nombre' => 'Puerto Montt', 'provincia_id' => 27]);
        Ciudad::create(['nombre' => 'Puerto Varas', 'provincia_id' => 27]);
        Ciudad::create(['nombre' => 'Castro', 'provincia_id' => 28]);
        Ciudad::create(['nombre' => 'Quellon', 'provincia_id' => 28]);
        Ciudad::create(['nombre' => 'Lago Verde', 'provincia_id' => 29]);
        Ciudad::create(['nombre' => 'Balmaceda', 'provincia_id' => 29]);
        Ciudad::create(['nombre' => 'Puerto Aysen', 'provincia_id' => 30]);
        Ciudad::create(['nombre' => 'Cochrane', 'provincia_id' => 30]);
        Ciudad::create(['nombre' => 'Porvenir', 'provincia_id' => 31]);
        Ciudad::create(['nombre' => 'Rio Grande', 'provincia_id' => 31]);
        Ciudad::create(['nombre' => 'Antartica Chilena', 'provincia_id' => 32]);
        Ciudad::create(['nombre' => 'Parque Nacional', 'provincia_id' => 32]);
    }
}
