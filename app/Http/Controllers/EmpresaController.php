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
    
        $empresa = $this->EmpresaModel->StoreEmpresa($request);

        return back();

    }

    
}
