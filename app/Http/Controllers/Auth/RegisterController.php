<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role; // Importa la clase Role para asignar roles al usuario

class RegisterController extends Controller
{
    /*
    |----------------------------------------------------------------------
    | Register Controller
    |----------------------------------------------------------------------
    |
    | Este controlador maneja el registro de nuevos usuarios así como su 
    | validación y creación. Este controlador usa un trait para proporcionar 
    | esta funcionalidad sin requerir código adicional.
    |
    */

    use RegistersUsers;

    /**
     * Donde redirigir a los usuarios después del registro.
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
        $this->middleware('guest');
    }

    /**
     * Obtener un validador para una solicitud de registro entrante.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Crear una nueva instancia de usuario después de un registro válido.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // Crear el usuario
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // Asignar un rol al usuario recién creado (por ejemplo, rol 'user')
        $role = Role::findByName('user'); // Puedes cambiar el rol por defecto según lo necesites
        $user->assignRole($role);

        return $user;
    }
}
