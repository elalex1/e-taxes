<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Mail\VerificarCorreo;

class RegisterController extends Controller
{
    public function Register(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['string', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        /*DB::table('users')->insert([
            'name' => $request->email,
            'email' => $request->email,
            'password' => Hash::make($request->email) ,
            'phone' => $request->phone,
        ]);*/

        event(new Registered($user));

        //Auth::login($user);
        
        $name = $request->name;
        $email = $request->email;
        //return dd($email);
        Mail::to($email)
                ->cc($email)
                ->send(new VerificarCorreo($name,$email));

        return back();
    }

    public function VerificarCorreo($id){

        DB::table('users')->where('email', $id)->update(['verificado' => "S"]);
        return redirect('inicio')->with('status','Correo Verificado exitosamente!');
    }
}
