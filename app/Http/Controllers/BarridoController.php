<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarridoController extends Controller
{
    public function Verificado($email){
        //$name = DB::table('users')->where('email', $mail)->value('name');
        $verificado = DB::table('users')
              ->where('email', $email)
              ->update(['activo' => 'S']);
        return $verificado;
    }
}
