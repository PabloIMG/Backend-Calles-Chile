<?php

namespace App\Http\Controllers;

use App\Repositories\CalleRepository;
use App\Repositories\CalleRepositoryInterface;

class CalleController extends Controller
{
    protected $calleRepo;

    public function __construct(CalleRepositoryInterface $calleRepo)
    {
        $this->calleRepo = $calleRepo;
    }

    public function getCalles($ciudad_id)
    {
        return $this->calleRepo->getCalles($ciudad_id);
    }
}
