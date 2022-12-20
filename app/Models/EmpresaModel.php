<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class EmpresaModel extends Model
{
    use HasFactory;

    protected $table = "empresas";
    protected $fillable = ['nombre','rfc','usuario'];
    protected $hidden = ['id_empresa'];

    public function GetEmpresas(){
        return EmpresaModel::all();
    }

    public function StoreEmpresa($request){
        
        $nombreP = $request->NombreEmpresa;
        $rfcP = $request->rfc;
        $usuarioP = $request->usuario;

        $query = "call NUEVAEMPRESA('$nombreP','$rfcP','$usuarioP');"; //Llamo al store pasandole los parametros del crear articulo
        try {
        $resultado = DB::select($query,array()); 
        $resultado = $resultado[0]->Respuesta; //Respuesta es lit la respuesta del store xD
        } catch (\Exception $th) {
        $resultado = $th->getMessage();
        }
        return $resultado;
    }
}
