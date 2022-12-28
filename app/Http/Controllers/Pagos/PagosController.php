<?php

namespace App\Http\Controllers\Pagos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pagos\PagosModel;

class PagosController extends Controller
{
    public function index(){
        return view('Catalogos.Pagos.Pagos');
    }
}
