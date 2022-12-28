<?php

namespace App\Http\Controllers\Costos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Costos\CostosModel;

class CostosController extends Controller
{
    public function index(){
        return view('Catalogos.Costos.Costos');
    }
}
