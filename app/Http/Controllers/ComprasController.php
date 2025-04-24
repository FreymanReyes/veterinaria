<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\compras;
use App\proveedores;
use App\Productos;
use DB;
use Carbon\Carbon;

class ComprasController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = DB::table('compras')
        ->select('compras.numero_factura as compra','proveedores.nombre AS proveedor',DB::raw('SUM(compras.cantidad) cantidad'),
        'compras.iva',DB::raw('SUM(compras.total) total'),
        DB::raw('IF(compras.tipo_factura = 1, "CONTADO","CREDITO") tipo'),
        'compras.fecha1 as inicial',
        'compras.fecha2 as final',
        'compras.fecha2 as mora',
        DB::raw('IF(compras.estado = 1, "PAGA","DEBE") estado'))
        ->join('proveedores', 'compras.id_proveedor', '=', 'proveedores.id')
        ->groupby('compras.numero_factura')
        ->get();
        $date = Carbon::now();
        for ($i = 0; $i < count($compras); $i++) {

            // $fe1=new Carbon($compras[$i]->inicial);
            $fe2=new Carbon($compras[$i]->final);

            if($fe2>$date){
                $compras[$i]->mora=0;
            }else {
                $diferencia=$fe2->diffInDays($date);
            $compras[$i]->mora=$diferencia;
            }

        }
// dd($compras);
        return view('compras.index',compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores= proveedores::where('tipo_proveedor',1)->paginate();
        return view ('compras.create',compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vari=0;
        for ($i = 0; $i < count($request->data); $i++) {

        $consulta_producto=productos::where('codigo','=',$request->data[$i][0])->get();

        if(count($consulta_producto)==0){
            $crear_producto= new productos;
            $crear_producto->codigo=$request->data[$i][0];
            $crear_producto->nombre='SIN NOMBRE';
            $crear_producto->descripcion='SIN DESCRIPCION';
            $crear_producto->precio=0;
            $crear_producto->stock_compras=$crear_producto->stock_compras+$request->data[$i][3];
            $crear_producto->stock=$crear_producto->stock+$request->data[$i][3];
            $crear_producto->tipo_producto=$request->tipo;
            $crear_producto->save();
            $id_pro=$crear_producto->id;
            $insertar_compra = new compras;
            $insertar_compra->numero_factura=$request->numero_factura;
            $insertar_compra->id_producto=$id_pro;
            $insertar_compra->cantidad=$request->data[$i][3];
            $insertar_compra->tipo_factura=$request->tipo;
            $insertar_compra->id_proveedor=$request->proveedor;
            $insertar_compra->iva=$request->iva_factura;
            $insertar_compra->precio_unidad=$request->data[$i][4];
            $insertar_compra->total=$request->data[$i][3]*$request->data[$i][4];
            $insertar_compra->fecha1=$request->fecha1;
            $insertar_compra->fecha2=$request->fecha2;
            $insertar_compra->estado=$request->estado;
            $insertar_compra->save();
            if($insertar_compra->save()){
               $vari=$vari+1;
            }
        }else{

            $consulta_producto[0]->codigo=$request->data[$i][0];
            $consulta_producto[0]->stock_compras=$consulta_producto[0]->stock_compras+$request->data[$i][3];
            $consulta_producto[0]->stock=$consulta_producto[0]->stock+$request->data[$i][3];
            $consulta_producto[0]->tipo_producto=$request->tipo;
            $consulta_producto[0]->save();

            $insertar_compra = new compras;
            $insertar_compra->numero_factura=$request->numero_factura;
            $insertar_compra->id_producto=$consulta_producto[0]->id;
            $insertar_compra->cantidad=$request->data[$i][3];
            $insertar_compra->tipo_factura=$request->tipo;
            $insertar_compra->id_proveedor=$request->proveedor;
            $insertar_compra->iva=$request->iva_factura;
            $insertar_compra->precio_unidad=$request->data[$i][4];
            $insertar_compra->total=$request->data[$i][3]*$request->data[$i][4];
            $insertar_compra->fecha1=$request->fecha1;
            $insertar_compra->fecha2=$request->fecha2;
            $insertar_compra->estado=$request->estado;
            $insertar_compra->save();
            if($insertar_compra->save()){
                $vari=$vari+1;
             }
            }
        }
        if(count($request->data)==$vari){
            return response(1);
        }else{
            return response(2);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // dd($request->compra);
        $compras = DB::table('compras')
        ->select('compras.numero_factura as compra','proveedores.nombre AS proveedor','productos.codigo',
        'productos.nombre as nombre_producto','compras.cantidad as cantidad','compras.precio_unidad as precio',
        'compras.iva','compras.total as total',
        DB::raw('IF(compras.tipo_factura = 1, "CONTADO","CREDITO") tipo'),
        'compras.fecha1 as inicial',
        'compras.fecha2 as final',
        'compras.fecha2 as mora',
        DB::raw('IF(productos.tipo_producto = 1, "UND","KL") und_medida'),
        DB::raw('IF(compras.estado = 1, "PAGA","DEBE") estado'))
        ->join('proveedores', 'compras.id_proveedor', '=', 'proveedores.id')
        ->join('productos', 'compras.id_producto', '=', 'productos.id')
        ->where('compras.numero_factura','=',$request->compra)
        ->get();

        $date = Carbon::now();
        for ($i = 0; $i < count($compras); $i++) {

            // $fe1=new Carbon($compras[$i]->inicial);
            $fe2=new Carbon($compras[$i]->final);

            if($fe2>$date){
                $compras[$i]->mora=0;
            }else {
                $diferencia=$fe2->diffInDays($date);
            $compras[$i]->mora=$diferencia;
            }

        }

        return view ('compras.show' , compact('compras'));

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
        // dd($request->factura);
        $compra=Compras::where('numero_factura','=',$request->compra)->get();
        for ($i = 0; $i < count($compra); $i++) {
            $compra[$i]->estado=1;
            $compra[$i]->save();
        }
        // dd($compra);
        // $compra->update($request->all());

        return redirect()->route('compras.index')->with('success', 'compra editada!');

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
