<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rap2hpoutre\FastExcel\FastExcel;

class UsuarioModel extends Model
{
    use HasFactory;

    protected $table = "users";
    protected $fillable = ['name','email','phone'];
    protected $hidden = ['id','password','rememer_token','verificado','updated_at','created_at'];

    public function GetUsuarios(){
        return UsuarioModel::all();
    }

    public function ImportUsuarios(){

    }

    public function ExportUsuarios(){

         return (new FastExcel(UsuarioModel::all()))->download('Usuarios.xlsx', function ($user) {
            return [
                'Nombre' => $user->name,
                'Correo' => $user->email,
                'Telefono' => $user->phone
            ];
        });

    }
}
