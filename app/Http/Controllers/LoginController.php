<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Models\Register;

class LoginController extends Controller
{

    public function index(){
        return view('login');
    }

    public function Login(Request $request){
        
        $credentials = $request->validate([
            'email' => ['required','email','string'], //Hacemos la validacion que es req, es un email y es una cadena de caracteres
            'password' => ['required', 'string']]); 
        
        $remember = request()->filled('remember'); //Con esta variable activamos o nel la funcion recuerdame
       
        if ( Auth::attempt($credentials, $remember) ) { //El Auth hace llamado a la base de datos p ver si existe el registro y generar la sesion
            $request->session()->regenerate(); //Esta linea es para evitar el Session Fixation [Vulnerabilidad]
            return redirect('inicio'); 
        } else {
            return view('login');
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
