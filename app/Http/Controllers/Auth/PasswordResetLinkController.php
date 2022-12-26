<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use App\Mail\ForgotPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        //Validamos que haya insertado un correo ya existente
        $request->validate([
            'email' => ['required', 'email'], //Meter validacion que si exista ese correo en bd
        ]);

        $email = DB::table('users')->where('email', $request->email)->value('email');
        if ($email == null) {
            return back();
        } else {

            //Generamost el token
            $token = Str::uuid();

            //recuperamos info y insertamos el password resset
            $name = DB::table('users')->where('email', $request->email)->value('name');
            DB::table('password_resets')->insert([
                'email' => $email,
                'token' => $token
            ]);

            //Mandamos email
            Mail::to($email)
            ->cc($email)
            ->send(new ForgotPassword($name,$email,$token));

            //regresamos a la vista
            return back();
        } 
    }

    public function newpassword($token){

        $email = DB::table('password_resets')->where('token', $token)->value('email');

        //Validamos si el token del correo es igual al que esta en bd
        if ($email == null) {
            return redirect('inicio');
        } else{
            return view('auth.reset-password',['email' => $email]);
        }
        //Mandamos vista de reset password
        
    }

    public function update(Request $request){
        $newpassword = Hash::make($request->password);
        DB::table('password_resets')->where('email', '=', $request->email)->delete();
        DB::table('users')->where('email', $request->email)->update(['password' => $newpassword]);
        
       return redirect('/');
        
    }
}
