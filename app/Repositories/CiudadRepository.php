<?php

namespace App\Repositories;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Ciudad;
use App\Repositories\CiudadRepositoryInterface;

class CiudadRepository implements CiudadRepositoryInterface
{
    public function getCiudades($provincia_id)
    {
        $Ciudad = Ciudad::where('provincia_id', $provincia_id)->get();

        return response()->json(["ciudades"=>$Ciudad], Response::HTTP_OK);
    }
}