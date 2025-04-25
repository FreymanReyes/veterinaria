<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cajas; // Asegúrate de que la clase esté correctamente importada
use App\Proveedores;
use App\Productos;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CajasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Se realiza la consulta utilizando el Query Builder
        $cajas = DB::table('cajas')
            ->select('cajas.id as id', 'cajas.monto_inicial', 'cajas.monto_final', 'cajas.estado', 
                    'users.name as usuario_apertura', 'cajas.created_at', 'cajas.updated_at',
                    DB::raw('(select sum(facturas.total) from facturas where facturas.id_caja = cajas.id) as total'),
                    DB::raw('(select users.name from users where users.id = cajas.id_user_cierre) as usuario_cierre'))
            ->join('users', 'cajas.id_user_apertura', '=', 'users.id')
            ->get();

        return view('cajas.index', compact('cajas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Aquí podrías agregar la lógica para mostrar el formulario si es necesario
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Obtener el ID del usuario autenticado
        $userid = $request->user()->id;

        // Crear una nueva caja
        $nueva_caja = new Cajas;
        $nueva_caja->monto_inicial = $request->saldo_inicial;
        $nueva_caja->id_user_apertura = $userid;
        $nueva_caja->estado = 1;
        $nueva_caja->save(); // Guardar la caja
        return response(1); // Respuesta sencilla indicando que se guardó
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // Si deseas mostrar detalles de una caja en específico, puedes implementar la lógica aquí
        // Ejemplo:
        // $caja = Cajas::findOrFail($request->id);
        // return view('cajas.show', compact('caja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Implementa la lógica de edición si es necesario
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Obtener el ID del usuario autenticado
        $userid = $request->user()->id;

        // Buscar la caja y actualizarla
        $consulta = Cajas::find($request->id_caja);
        $consulta->monto_final = $request->saldo_final;
        $consulta->id_user_cierre = $userid;
        $consulta->estado = 2; // Cambiar el estado a "cerrada" (suponiendo que 2 es el estado de cierre)
        $consulta->save(); // Guardar los cambios

        return response(1); // Respuesta sencilla indicando que se actualizó
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Si necesitas eliminar una caja, puedes implementar la lógica aquí
        // Ejemplo:
        // $caja = Cajas::findOrFail($id);
        // $caja->delete();
    }

    /**
     * Cerrar la caja de forma manual desde la vista.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editar_caja(Request $request)
    {
        // Obtener el ID del usuario autenticado
        $userid = $request->user()->id;

        // Buscar la caja por ID
        $consulta = Cajas::find($request->caja);
        $consulta->monto_final = 0; // Asignar saldo final en 0 (según tu lógica)
        $consulta->id_user_cierre = $userid;
        $consulta->estado = 2; // Cambiar el estado de la caja a cerrada
        $consulta->save(); // Guardar los cambios

        return redirect()->route('cajas.index')->with('success', 'Caja cerrada exitosamente!');
    }
}
