<?php

namespace App\Repositories;

interface CiudadRepositoryInterface
{
    public function getCiudades($provincia_id);
}