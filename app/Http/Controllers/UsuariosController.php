<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioModel;

class UsuariosController extends Controller
{

    protected $UsuariosModel;

    public function __construct(UsuarioModel $UsuarioModel){
        $this->UsuarioModel = $UsuarioModel;
    }

    public function index(){

        $usuarios = $this->UsuarioModel->GetUsuarios();
        return view('usuarios.usuarios',['usuarios' => $usuarios]);
    }

    public function ExportUsuarios(){

        $export = $this->UsuarioModel->ExportUsuarios();
        return $export;
    }
}
