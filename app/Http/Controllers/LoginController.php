<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;

use App\Models\Register;
use App\Models\UsuariosModel;

class LoginController extends Controller
{
    protected $usuariosModel;

    public function __construct(UsuariosModel $UsuariosModel){
        $this->UsuariosModel = $UsuariosModel;
    }

    public function index(){
        return view('login');
    }

    public function Login(Request $request){
        
        $credentials = $request->validate([
            'email' => ['required','email','string'], //Hacemos la validacion que es req, es un email y es una cadena de caracteres
            'password' => ['required', 'string']]); 
        
        $remember = request()->filled('remember'); //Con esta variable activamos o nel la funcion recuerdame
        $status = DB::table('users')->where('email', $request->email)->value('verificado');
        //return dd($status);

        if ( Auth::attempt($credentials, $remember) ) { //El Auth hace llamado a la base de datos p ver si existe el registro y generar la sesion

            if ($status == "S" ) { //Si el status es igual a S va a ingresar sino se va a volver a reenviar el correo de confirmacion 
                $request->session()->regenerate(); //Esta linea es para evitar el Session Fixation [Vulnerabilidad]

                
                $name = DB::table('users')->where('email', $request->email)->value('name');
                $email = DB::table('users')->where('email', $request->email)->value('email');
                $empresa = DB::table('empresas')->where('usuario', $request->email)->value('nombre');

                //Almacenamos variables en la sesion==============================
                session(['name' => $name]); session(['email' => $email]); session(['empresa' => $empresa]); 

                //================================================================
                return redirect('inicio'); 
            }
            else {
                return view('login'); //Aqui vamos a poner lo de reenviar correo 
            }

        } else {
            throw ValidationException::withMessages(['email' => 'This value is incorrect']);

            //return view('login');
        }       
    }

    public function Logout(Request $request){
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

    }

    public function inicio(){
        return view('inicio');
    }
}
