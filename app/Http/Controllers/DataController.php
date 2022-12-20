<?php

namespace App\Http\Controllers;

use App\Repositories\DataRepository;

class DataController extends Controller
{
    protected DataRepository $dataRepo;

    public function __construct(DataRepository $dataRepo)
    {
        $this->dataRepo = $dataRepo;
    }

    //* .: FUNCIONES GET :. *//
    public function getRegiones()
    {
        return $this->dataRepo->getRegiones();
    }

    public function getProvincias($region_id)
    {
        return $this->dataRepo->getProvincias($region_id);
    }

    public function getCiudades($provincia_id)
    {
        return $this->dataRepo->getCiudades($provincia_id);
    }

    public function getCalles($ciudad_id)
    {
        return $this->dataRepo->getCalles($ciudad_id);
    }
}