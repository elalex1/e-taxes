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

    public function CreateSchema($request){
        
        $nombreP = $request->NombreEmpresa;

        $qry = "CREATE SCHEMA `$nombreP` ;";

        $data = DB::select($qry,array());

        return $data;
    }

    public function CreateTable($request){
        $nombreP = $request->NombreEmpresa;
        $qry = "CREATE TABLE `$nombreP`.`usuarios` (
            `id_usuario` INT NOT NULL AUTO_INCREMENT,
            `nombre` VARCHAR(45) NULL,
            PRIMARY KEY (`id_usuario`));
          ";

$data = DB::select($qry,array());

return $data;
    }

    public function prueba(){

        $qry = " CREATE SCHEMA IF NOT EXISTS `mcdonalds` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
        
        
        -- -----------------------------------------------------
        -- Table `mcdonalds`.`usuarios`
        -- -----------------------------------------------------
        CREATE TABLE IF NOT EXISTS `mcdonalds`.`usuarios` (
          `id_usuario` INT NOT NULL AUTO_INCREMENT,
          `nombre` VARCHAR(45) NULL DEFAULT NULL,
          PRIMARY KEY (`id_usuario`))
        ENGINE = InnoDB
        DEFAULT CHARACTER SET = utf8mb4
        COLLATE = utf8mb4_0900_ai_ci;
        
        
        SET SQL_MODE=@OLD_SQL_MODE;
        SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
        SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";
        try {
            $resultado = DB::select($qry,array()); 
            $resultado = $resultado[0]->Respuesta; //Respuesta es lit la respuesta del store xD
            } catch (\Exception $th) {
            $resultado = $th->getMessage();
            }
            return $resultado;

           
    }
}
