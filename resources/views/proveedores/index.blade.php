@extends('layout')
@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        @can('proveedores.create')
                                <a href="{{ route('proveedores.create') }}"
                                   class="btn btn-sm btn-primary pull-right">
                                    CREAR
                                </a>
                            @endcan
                            <h2>
                                <!-- EXPORTABLE TABLE -->
                                PROVEEDORES DEL SISTEMA
                            </h2>
                           
                        </div>
                        
                        <div class="body">
                        @include('proveedores.partials.mensajes')
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>NIT</th>
                                            <th>DIRECCION</th>
                                            <th>TELEFONO</th>
                                            <th>TIPO DE PROVEEDOR</th>
                                            <th>VER</th>
                                            <th>EDITAR</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        
                                    </tfoot>
                                    <tbody>
                                    @foreach($proveedores as $proveedor)
                                        <tr>
                                            <td>{{$proveedor->id}}</td>
                                            <td>{{$proveedor->nombre}}</td>
                                            <td>{{$proveedor->nit}}</td>
                                            <td>{{$proveedor->direccion}}</td>
                                            <td>{{$proveedor->telefono}}</td>
                                            <td>
                                            @if($proveedor->tipo_proveedor == 1)
                                                PRODUCTOS
                                            @else
                                                SERVICIOS
                                            @endif
                                            </td>
                                            <td  width="10px">
                                            @can('proveedores.show')
                                            <a href="{{ route('proveedores.show', $proveedor->id) }}"
                                               class="btn btn-sm btn-default">
                                            VER
                                            </a>
                                            @endcan
                                            </td>
                                            <td  width="10px">
                                            @can('proveedores.edit')
                                            <a href="{{ route('proveedores.edit', $proveedor->id) }}"
                                               class="btn btn-sm bg-green">
                                            EDITAR
                                            </a>
                                            @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
    </div>
</section>
@endsection