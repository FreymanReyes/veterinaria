<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;
use App\sexos;
use App\mascotas;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes= clientes::paginate();
        $clientes->each(function($clientes){
            $clientes->sexocliente;
            });
        return view ('clientes.index', compact('clientes'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexo=sexos::pluck('nombre','id');
        return view ('clientes.create', compact('sexo'));
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
            'documento' => ['required'],
            'id_sexo' => ['required'],
            'direccion' => ['required'],
            'telefono' => ['required'],
            'correo' => ['email'],
            ]);

            $cliente=clientes::create($request->all());

        return redirect()->route('clientes.index')->with('success', 'cliente creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(clientes $cliente)
    {

        return view ('clientes.show' , compact('cliente'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $cliente=clientes::find($id);
       $sexo=sexos::pluck('nombre','id');
        return view ('clientes.edit' , compact('cliente','sexo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,clientes $cliente)
    {
        
        $this->validate($request, [
            'nombre' => ['required'],
            'documento' => ['required'],
            'id_sexo' => ['required'],
            'direccion' => ['required'],
            'telefono' => ['required'],
            'correo' => ['email'],
            ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.edit', $cliente->id)->with('success', 'cliente editado!');   

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
}
