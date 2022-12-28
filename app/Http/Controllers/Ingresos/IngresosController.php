<?php

namespace App\Http\Controllers\Ingresos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ingresos\IngresosModel;

class IngresosController extends Controller
{
    public function index(){
        return view('Catalogos.Ingresos.Ingresos');
    }
}
