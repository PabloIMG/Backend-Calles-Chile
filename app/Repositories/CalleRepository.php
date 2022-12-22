<?php

namespace App\Repositories;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Calle;
use App\Repositories\CalleRepositoryInterface;

class CalleRepository implements CalleRepositoryInterface
{
    public function getCalles($ciudad_id)
    {
        $Calle = Calle::where('ciudad_id', $ciudad_id)->get();

        return response()->json(["calles"=>$Calle], Response::HTTP_OK);
    }
}