<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\servicios;
use App\proveedores;
use App\clientes;

class ServiciosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios= servicios::paginate();
        $servicios->each(function($servicios){
            $servicios->proveedorservicio;
            });

        return view ('servicios.index', compact('servicios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores=proveedores::where('tipo_proveedor',2)->pluck('nombre','id');
        return view ('servicios.create',compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => ['required'],
            'precio' => ['required'],
            'id_proveedor' => ['required'],
            ]);

            $servicio=servicios::create($request->all());

        return redirect()->route('servicios.index')->with('success', 'servicio creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(servicios $servicio)
    {

        return view ('servicios.show' , compact('servicio'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $servicio=servicios::find($id);
       $proveedores=proveedores::pluck('nombre','id');
        return view ('servicios.edit' , compact('servicio','proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,servicios $servicio)
    {

        $this->validate($request, [
            'nombre' => ['required'],
            'precio' => ['required'],
            'id_proveedor' => ['required'],
            ]);
        $servicio->update($request->all());

        return redirect()->route('servicios.edit', $servicio->id)->with('success', 'servicio editado!');

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



    public function buscar(Request $request)
    {
        $consulta=clientes::where('documento','=',$request->cc)->get();
        return response($consulta);
    }


    public function crear_cliente(Request $request)
    {
        $consulta=clientes::where('documento','=',$request->cc)->get();
        if(count($consulta)>0){
            return response(1);
        }else{

        $insert= new clientes;
        $insert->nombre=$request->nombre;
        $insert->documento=$request->cc;
        $insert->direccion=$request->direccion;
        $insert->telefono=$request->telefono;
        $insert->id_sexo=$request->sexo;
        $insert->correo=$request->correo;
        $insert->save();
        return response($insert);
        }
    }

    public function buscar_servicio(Request $request){
        $servicio=servicios::find($request->id_servicio);
        return response($servicio);
    }
}
