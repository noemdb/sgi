<?php

namespace App\Http\Controllers\Poa\Chart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Modelos adicionadas
use App\Models\poas\Poa;

class PoasController extends Controller
{

    public function index()
    {        
        return view('poa.poas.charts');
    }
    
}
