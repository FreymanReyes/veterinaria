<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos= Productos::paginate();

        return view ('productos.index', compact('productos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ('productos.create');
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
            'codigo' => ['required','unique:productos'],
            'nombre' => ['required'],
            'descripcion' => ['required'],
            'precio' => ['required'],
            'tipo_producto' => ['required'],
            ]);

            $producto=Productos::create($request->all());

        return redirect()->route('productos.index')->with('success', 'producto creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(productos $producto)
    {

        return view ('productos.show' , compact('producto'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $producto=Productos::find($id);

        return view ('productos.edit' , compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,productos $producto)
    {

        $this->validate($request, [
            'codigo' => ['required'],
            'nombre' => ['required'],
            'descripcion' => ['required'],
            'precio' => ['required'],
            'tipo_producto' => ['required'],
            ]);

        $producto->update($request->all());

        return redirect()->route('productos.edit', $producto->id)->with('success', 'producto editado!');

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


    public function buscar_producto(Request $request)
    {
       $producto=productos::where('codigo',$request->producto)->where('stock','>',0)->first();
       if($producto==null){
           $producto=0;
           return response($producto);
       }else{
           return response($producto);
       }
    }
}
