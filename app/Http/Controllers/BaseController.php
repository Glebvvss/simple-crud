<?php

namespace App\Http\Controllers;

use App\Http\Traits\Responsable;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BaseController extends Controller
{
    use AuthorizesRequests, 
        DispatchesJobs, 
        ValidatesRequests,
        Responsable;
}