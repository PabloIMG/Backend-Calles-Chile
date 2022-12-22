<?php

namespace App\Repositories;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Provincia;
use App\Models\Ciudad;
use App\Models\Calle;
use App\Repositories\DataRepositoryInterface;

class DataRepository implements DataRepositoryInterface
{
    public function getRegiones()
    {
        $Region = Region::all();

        return response()->json($Region, Response::HTTP_OK);
    }

    public function getProvincias($region_id)
    {
        $Provincia = Provincia::where('region_id', $region_id)->get();

        return response()->json(["provincias"=>$Provincia], Response::HTTP_OK);
    }

    public function getCiudades($provincia_id)
    {
        $Ciudad = Ciudad::where('provincia_id', $provincia_id)->get();

        return response()->json(["ciudades"=>$Ciudad], Response::HTTP_OK);
    }

    public function getCalles($ciudad_id)
    {
        $Calle = Calle::where('ciudad_id', $ciudad_id)->get();

        return response()->json(["calles"=>$Calle], Response::HTTP_OK);
    }
}