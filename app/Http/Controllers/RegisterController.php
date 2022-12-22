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

use App\Mail\Registro;

class RegisterController extends Controller
{
    public function Register(Request $request)
    {
        
        /*$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);*/

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
        
        Mail::to($request->user())->send(new Registro());
        return back();
        //return redirect(RouteServiceProvider::HOME);
    }
}
