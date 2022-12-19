<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsuariosModel extends Model
{
    use HasFactory;

    protected $table = "users";
    protected $fillable = ['name', 'email', 'phone', 'verificado'];
    protected $hidden = ['id','password','email_verified_at'];

    public function getUsuario($id){

            $qry = ' SELECT ';
            $qry .= ' name ';
            $qry .= ' FROM users ';
            $qry .= ' WHERE ';
		    $qry .= ' email = \'' . $id . '\'';
            return (DB::select($qry));
    }
}
