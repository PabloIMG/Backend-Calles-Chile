<?php

namespace App\Repositories;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Repositories\RegionRepositoryInterface;

class RegionRepository implements RegionRepositoryInterface
{
    public function getRegiones()
    {
        $Region = Region::all();

        return response()->json($Region, Response::HTTP_OK);
    }
}