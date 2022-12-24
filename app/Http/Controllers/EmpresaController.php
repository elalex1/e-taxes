<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpresaModel;

class EmpresaController extends Controller
{

    protected $EmpresaModel;

    public function __construct(EmpresaModel $EmpresaModel){
        $this->EmpresaModel = $EmpresaModel;
    }

    public function CrearEmpresa(Request $request){
    
        //$empresa = $this->EmpresaModel->CreateSchema($request);
        //$tablas = $this->EmpresaModel->CreateTable($request);
        $tablas = $this->EmpresaModel->prueba();

        return $tablas;

    }

    
}
