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
                            <h1>
                                {{$producto->nombre}} 
                                <!-- <small>{{$producto->descripcion}}</small> -->
                            </h1>
                            
                        </div>
                        <div class="row ">
                        <div class="body col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           <h4>CODIGO </h4>
                           <hr>
                           <p> {{$producto->codigo}}</p>
                           
                        </div>
                        <div class="body col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h4>PRECIO </h4>
                           <hr>
                           <P>$ {{$producto->precio}}</p>
                        </div>
                        </div>
                        <div class="row ">
                        <div class="body col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <h4>DESCRIPCIÓN </h4>
                           <hr>
                           <P> {{$producto->descripcion}}</p>
                        </div>
                        <div class="body col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <h4>STOCK </h4>
                           <hr>
                           <P> {{$producto->stock}}</p>
                        </div>
                        </div>
                        <div class="row ">
                        <div class="body col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h4>STOCK COMPRAS </h4>
                           <hr>
                           <P> {{$producto->stock_compras}}</p>
                        </div>
                        
                        <div class="body col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h4>STOCK VENTAS</h4>
                           <hr>
                           <P> {{$producto->stock_ventas}}</p>
                        </div>
                        </div>
                        <span>
                             @can('productos.index')
                                 <a href="{{route('productos.index')}}"
                                     class="btn btn-sm bg-blue ">
                                 VOLVER
                                 </a>
                             @endcan
                             </span>
                                   
                                
                             <span> 
                             @can('productos.edit')
                                     <a href="{{ route('productos.edit', $producto->id) }}"
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