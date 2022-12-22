<?php

namespace App\Repositories;

interface DataRepositoryInterface
{
    public function getRegiones();
    public function getProvincias($region_id);
    public function getCiudades($provincia_id);
    public function getCalles($ciudad_id);
}