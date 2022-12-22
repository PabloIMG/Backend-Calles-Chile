<?php

namespace App\Http\Controllers;

use App\Repositories\CiudadRepository;
use App\Repositories\CiudadRepositoryInterface;

class CiudadController extends Controller
{
    protected $ciudadRepo;

    public function __construct(CiudadRepositoryInterface $ciudadRepo)
    {
        $this->ciudadRepo = $ciudadRepo;
    }

    public function getCiudades($provincia_id)
    {
        return $this->ciudadRepo->getCiudades($provincia_id);
    }
}
