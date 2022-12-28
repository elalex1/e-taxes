<?php

namespace App\Http\Controllers\Nominas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nominas\NominasModel;

class NominasController extends Controller
{
    public function index(){
        return view('Catalogos.Nominas.Nominas');
    }
}
