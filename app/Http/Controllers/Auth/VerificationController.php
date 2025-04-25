<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Spatie\Permission\Models\Role; // Importa el modelo de roles

class VerificationController extends Controller
{
    /*
    |----------------------------------------------------------------------
    | Email Verification Controller
    |----------------------------------------------------------------------
    |
    | Este controlador se encarga de manejar la verificación del correo electrónico
    | para cualquier usuario que se haya registrado recientemente en la aplicación.
    | Los correos electrónicos también pueden ser reenviados si el usuario no recibe 
    | el mensaje original.
    |
    */

    use VerifiesEmails;

    /**
     * Donde redirigir a los usuarios después de la verificación.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Crear una nueva instancia del controlador.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    /**
     * Acción después de que el correo ha sido verificado.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    protected function verified($user)
    {
        // Aquí puedes asignar un rol o realizar cualquier acción adicional
        $role = Role::findByName('user'); // Asigna el rol 'user', cámbialo según tus necesidades
        $user->assignRole($role);
        
        // Opcional: podrías redirigir a una página específica, si lo deseas
        return redirect()->route('home');
    }
}
