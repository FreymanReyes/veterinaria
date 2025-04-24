<?php

namespace App\Http\Controllers;
use App\mascotas;
use App\tipos_edad;
use App\razas;
use App\sexos;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class MascotasController extends Controller
{
    public function buscar_mascota(Request $request)
    {
    //    dd($request->id_cliente);
       $mascotas=mascotas::where('id_cliente','=',$request->id_cliente)->get();
    //    dd($consulta);
       return response()->json(view('facturas.partials.mascotas', compact('mascotas'))->render()); 
    }
    
    public function crear_mascota(Request $request)
    {
    //    dd($request->id_cliente);
      $insert=new mascotas;
      $insert->nombre=$request->nombre;
      $insert->edad=$request->edad;
      $insert->id_tipos_edades=$request->tipo;
      $insert->id_cliente=$request->id_cliente;
      $insert->id_raza=$request->raza;
      $insert->id_sexo=$request->sexo;
      $insert->save();

       $mascotas=mascotas::where('id_cliente','=',$request->id_cliente)->get();
    //    dd($consulta);
       return response()->json(view('facturas.partials.mascotas', compact('mascotas'))->render()); 
    }




    
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //   $mascotas= mascotas::paginate();
      $mascotas=DB::table('mascotas')
        ->select('mascotas.id','mascotas.nombre as nombre','clientes.nombre as cliente','mascotas.edad AS edad','sexos.nombre as sexo','razas.tipo as t_raza','razas.nombre as raza','tipos_edads.nombre as tipo')
        ->join('sexos', 'mascotas.id_sexo', '=', 'sexos.id')
        ->join('razas', 'mascotas.id_raza', '=', 'razas.id')
        ->join('tipos_edads', 'mascotas.id_tipos_edades', '=', 'tipos_edads.id')
        ->join('clientes', 'mascotas.id_cliente', '=', 'clientes.id')
        ->get();
      //  dd($mascotas);
        return view ('mascotas.index', compact('mascotas'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('mascotas.create');
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
            'codigo' => ['required','unique:mascotas'],
            'nombre' => ['required'],
            'descripcion' => ['required'],
            'precio' => ['required'],
            'tipo_mascota' => ['required'],
            ]);

            $mascota=mascotas::create($request->all());

        return redirect()->route('mascotas.index')->with('success', 'mascota creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(mascotas $mascota)
    {
        $date = Carbon::now();
        $fe1=new Carbon($mascota->created_at);

        if($mascota->tipo_edadmascota->nombre=='DIAS'){
            $diferencia=$fe1->diffInDays($date);
            $mascota->edad=$mascota->edad+$diferencia;
           
        }elseif($mascota->tipo_edadmascota->nombre=='MESES'){
            $diferencia=$fe1->diffInMonths($date);
            $mascota->edad=$mascota->edad+$diferencia;

        }else{
            $diferencia=$fe1->diffInYears($date);
            $mascota->edad=$mascota->edad+$diferencia;
            
        }
        return view ('mascotas.show' , compact('mascota'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $mascota=mascotas::find($id);
       $id_tipos_edades=tipos_edad::pluck('nombre','id');
       $razas=razas::pluck('nombre','id');
       $sexos=sexos::pluck('nombre','id');
       
        return view ('mascotas.edit' , compact('mascota','id_tipos_edades','razas','sexos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,mascotas $mascota)
    {
        
        $this->validate($request, [
            'nombre' => ['required'],
            'edad' => ['required'],
            'id_tipos_edades' => ['required'],
            'id_raza' => ['required'],
            'id_sexo' => ['required'],
            ]);

        $mascota->update($request->all());

        return redirect()->route('mascotas.edit', $mascota->id)->with('success', 'mascota editada!');   

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
