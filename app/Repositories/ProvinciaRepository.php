<?php

namespace App\Repositories;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Provincia;
use App\Repositories\ProvinciaRepositoryInterface;

class ProvinciaRepository implements ProvinciaRepositoryInterface
{
    public function getProvincias($region_id)
    {
        $Provincia = Provincia::where('region_id', $region_id)->get();

        return response()->json(["provincias"=>$Provincia], Response::HTTP_OK);
    }
}