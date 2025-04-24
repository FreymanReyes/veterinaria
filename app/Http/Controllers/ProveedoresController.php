<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedores;

class ProveedoresController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores= proveedores::paginate();
        return view ('proveedores.index', compact('proveedores'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('proveedores.create');
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
            'nit' => ['required','unique:proveedores'],
            'direccion' => ['required'],
            'telefono' => ['required'],
            'tipo_proveedor' => ['required'],
            ]);


            $proveedor=proveedores::create($request->all());

        return redirect()->route('proveedores.index')->with('success', 'Proveedor creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(proveedores $proveedor)
    {

        return view ('proveedores.show' , compact('proveedor'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $proveedor=proveedores::find($id);
        
        return view ('proveedores.edit' , compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,proveedores $proveedor)
    {
        
        $this->validate($request, [
            'nombre' => ['required'],
            'nit' => ['required'],
            'direccion' => ['required'],
            'telefono' => ['required'],
            'tipo_proveedor' => ['required'],
            ]);

        $proveedor->update($request->all());

        return redirect()->route('proveedores.edit', $proveedor->id)->with('success', 'Proveedor editado!');   

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

