<?php

namespace App\Http\Controllers\Egresos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Egresos\EgresosModel;

class EgresosController extends Controller
{
    public function index(){
        return view('Catalogos.Egresos.Egresos');
    }
}
