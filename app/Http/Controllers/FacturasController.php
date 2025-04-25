<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cajas;
use App\facturas;
use App\proveedores;
use App\sexos;
use App\razas;
use App\tipos_edad;
use App\Productos;
use App\Servicios;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FacturasController extends Controller
{




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $date = Carbon::now();
        $date2 = Carbon::now();
        $date = $date->format('Y-m-d 00:00:00');
        $date2 = $date2->format('Y-m-d 23:59:59');
        $caja= cajas::whereDate('created_at', '>=', $date)
        ->whereDate('updated_at', '<=', $date2)
        ->where('estado','=',1)
        ->get();
        $sexo=sexos::all();
        $tipo_edades=tipos_edad::all();
        $razas=razas::all();
        $servicios=servicios::all();
        return view ('facturas.create',compact('caja','sexo','tipo_edades','razas','servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd('hola');
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




}
