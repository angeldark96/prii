<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider(string $driver)
    {
        // Te va redirigir al driver{ facebook| graph } para que le des autorizacion o no
        return Socialite::driver($driver)->redirect();
    }

    public function handleProviderCallback(string $driver)
    {
        if (!request()->has('code') || request()->has('denied')) {
            // Previamente me va lanzar un mensaje flash
            //  [ clase de bootstrap danger primera variable del array | traducciones que van depende]
            session()->flash('message', ['danger', __("Inicio de sesión cancelado")]);
            return redirect('login');
        }


        // Te pintara en pantalla en un objeto los usuarios
        $socialUser = Socialite::driver($driver)->user();
        // El usuario no ha sido creado
        $user = null;
        // Si no hay error true
        $success = true;
        // devolver el email en este caso todas las plataformas devuelven email menos twitter
        $email = $socialUser->email;

        // Verificacion del usuario y me elige al primero
        $check = User::whereEmail($email)->first();



        if ($check) {
            // si el usuario esta registrado asignamos el usuario de base de datos a user
            // y pasa defrente
            $user = $check;
        } else {
            \DB::beginTransaction();
            try {
                // Creamos el usuario
                $user = User::create([
                    // inserto el nombre y email que nos ofrece la red social
                    "name" => $socialUser->name,
                    "email" => $email
                ]);

                // si es    $success = true; no entra aqui
            } catch (\Exception $exception) {
                // si registra mal entra aqui
                $success = $exception->getMessage();
                // Deshacer todos lo que se ha podido hacer y no entre nada en BD
                \DB::rollBack();
            }
        }

        if ($success === true) {
            \DB::commit();
            // Incia sesion automaticamente
            auth()->loginUsingId($user->id);
            // Luego del login le mostrara el home
            return redirect(route('home'));
        }
        // le pasara una sesion con cual error que se pueda presentar
        session()->flash('message', ['danger', $success]);
        return redirect('login');

    }

}
