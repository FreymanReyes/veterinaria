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
                                {{$servicio->nombre}} 
                            </strong>
                            </h2>
                            
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">PRECIO: {{$servicio->precio}}</h2>
                            <!-- <br> -->
                            <h2 class="card-inside-title">PROVEEDOR: {{$servicio->proveedorservicio->nombre}}</h2>
                            <!-- <br> -->
                            
                            
                        </div>
                        <span>
                             @can('servicios.index')
                                 <a href="{{route('servicios.index')}}"
                                     class="btn btn-sm bg-blue ">
                                 VOLVER
                                 </a>
                             @endcan
                             </span>
                                   
                                
                             <span> 
                             @can('servicios.edit')
                                     <a href="{{ route('servicios.edit', $servicio->id) }}"
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