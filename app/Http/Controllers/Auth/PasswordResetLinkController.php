<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use App\Http\Mail\ForgotPassword;

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
        $request->validate([
            'email' => ['required', 'email'], //Meter validacion que si exista ese correo en bd
        ]);

        $name = DB::table('users')->where('email', $request->email)->value('name');
        $email = DB::table('users')->where('email', $request->email)->value('email');

        Mail::to($email)
        ->cc($email)
        ->send(new ForgotPassword($name,$email));

        return dd($email);
    }
}
