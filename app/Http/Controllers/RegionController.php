<?php

namespace App\Http\Controllers;

use App\Repositories\RegionRepository;
use App\Repositories\RegionRepositoryInterface;

class RegionController extends Controller
{
    protected $regionRepo;

    public function __construct(RegionRepositoryInterface $regionRepo)
    {
        $this->regionRepo = $regionRepo;
    }

    public function getRegiones()
    {
        return $this->regionRepo->getRegiones();
    }
}
