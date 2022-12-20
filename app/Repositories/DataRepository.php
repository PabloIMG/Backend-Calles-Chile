<?php

namespace App\Repositories;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Provincia;
use App\Models\Ciudad;
use App\Models\Calle;

class DataRepository
{
    public function getRegiones()
    {
        $Region = Region::all();

        return response()->json($Region, Response::HTTP_OK);
    }

    public function getProvincias($region_id)
    {
        $Provincia::where('region_id', $region_id)->get();

        return response()->json($Provincia, Response::HTTP_OK);
    }

    public function getCiudades($provincia_id)
    {
        $Ciudad::where('provincia_id', $provincia_id)->get();

        return response()->json($Ciudad, Response::HTTP_OK);
    }

    public function getCalles($ciudad_id)
    {
        $Calle::where('ciudad_id', $ciudad_id)->get();

        return response()->json($Calle, Response::HTTP_OK);
    }
}