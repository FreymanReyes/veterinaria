<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cajas;
use App\proveedores;
use App\Productos;
use DB;
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
        // $cajas= cajas::paginate();
        $cajas = DB::table('cajas')
        ->select('cajas.id as id','cajas.monto_inicial','cajas.monto_final','cajas.estado','users.name as usuario_apertura',
        'cajas.created_at','cajas.updated_at',
        DB::raw('(select sum(facturas.total) from facturas where facturas.id_caja = cajas.id ) as total'),
        DB::raw('(select users.name from users where users.id = cajas.id_user_cierre ) as usuario_cierre'))
       
        ->join('users', 'cajas.id_user_apertura', '=', 'users.id')
        ->get();

// dd($cajas);

        return view ('cajas.index', compact('cajas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $userid = $request->user()->id;
       $nueva_caja = new cajas;
       $nueva_caja->monto_inicial=$request->saldo_inicial;
       $nueva_caja->id_user_apertura=$userid;
       $nueva_caja->save();
        return response(1);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
       
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $userid = $request->user()->id;
        $consulta=cajas::find($request->id_caja);
        $consulta->monto_final=$request->saldo_final;
        $consulta->id_user_cierre=$userid;
        $consulta->estado=2;
        $consulta->save();
        return response(1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function editar_caja(Request $request)
    {
        $userid = $request->user()->id;
        $consulta=cajas::find($request->caja);
        $consulta->monto_final=0;
        $consulta->id_user_cierre=$userid;
        $consulta->estado=2;
        $consulta->save();
        return redirect()->route('cajas.index')->with('success', 'caja cerrada exitosamente!');
    }
}
