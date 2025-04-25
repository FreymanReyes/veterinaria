<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Spatie\Permission\Models\Role; // Importa el modelo de roles

class ResetPasswordController extends Controller
{
    /*
    |----------------------------------------------------------------------
    | Password Reset Controller
    |----------------------------------------------------------------------
    |
    | Este controlador es responsable de manejar las solicitudes de restablecimiento 
    | de contraseñas y utiliza un trait simple para incluir este comportamiento.
    | Puedes explorar este trait y sobrescribir cualquier método que desees modificar.
    |
    */

    use ResetsPasswords;

    /**
     * Donde redirigir a los usuarios después de restablecer su contraseña.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Aquí puedes personalizar la lógica después de restablecer la contraseña.
     *
     * Por ejemplo, asignar un rol al usuario después del restablecimiento de la contraseña.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    protected function resetPassword($user, $password)
    {
        parent::resetPassword($user, $password);

        // Asignar un rol después del restablecimiento de la contraseña
        $role = Role::findByName('user'); // Asignar el rol 'user' (puedes cambiarlo)
        $user->assignRole($role);
    }
}
