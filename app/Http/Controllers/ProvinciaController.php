<?php

namespace App\Http\Controllers;

use App\Repositories\ProvinciaRepository;
use App\Repositories\ProvinciaRepositoryInterface;

class ProvinciaController extends Controller
{
    protected $provinciaRepo;

    public function __construct(ProvinciaRepositoryInterface $provinciaRepo)
    {
        $this->provinciaRepo = $provinciaRepo;
    }

    public function getProvincias($region_id)
    {
        return $this->provinciaRepo->getProvincias($region_id);
    }
}
