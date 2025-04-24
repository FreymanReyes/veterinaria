@extends('layout')
@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
           
        <div class="container-fluid">
            <div class="block-header">
                <!-- <h2>BASIC CARD</h2> -->
            </div>
            <!-- Basic Card -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            <strong>
                                {{$proveedor->nombre}} 
                            </strong>
                            </h2>
                            
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">NIT: {{$proveedor->nit}}</h2>
                            <!-- <br> -->
                            <h2 class="card-inside-title">DIRECCIÓN: {{$proveedor->direccion}}</h2>
                            <!-- <br> -->
                            <h2 class="card-inside-title">TELEFONO: {{$proveedor->telefono}}</h2>
                            
                            <h2 class="card-inside-title">TIPO DE PROVEEDOR: 
                            @if($proveedor->tipo_proveedor == 1)
                                PRODUCTOS
                            @else
                                SERVICIOS
                            @endif
                            </h2>
                        </div>
                        <span>
                             @can('proveedores.index')
                                 <a href="{{route('proveedores.index')}}"
                                     class="btn btn-sm bg-blue ">
                                 VOLVER
                                 </a>
                             @endcan
                             </span>
                                   
                                
                             <span> 
                             @can('proveedores.edit')
                                     <a href="{{ route('proveedores.edit', $proveedor->id) }}"
                                        class="btn btn-sm bg-green pull-right">
                                     EDITAR
                                     </a>
                             @endcan
                        </span>
                    </div>
                </div>

                
            </div>
            <!-- #END# Basic Card -->
                </div>
            </div>
        </div>
    </section>
@endsection