@extends('layout')
@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        @can('clientes.create')
                                <a href="{{ route('clientes.create') }}"
                                   class="btn btn-sm btn-primary pull-right">
                                    CREAR
                                </a>
                            @endcan
                            <h2>
                                <!-- EXPORTABLE TABLE -->
                                CLIENTES DEL SISTEMA
                            </h2>
                           
                            <!-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                           
                        </div>
                        
                        <div class="body">
                        @include('clientes.partials.mensajes')
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>DOCUMENTO</th>
                                            <th>DIRECCION</th>
                                            <th>TELEFONO</th>
                                            <th>CORREO</th>
                                            <th>SEXO</th>
                                            <th>VER</th>
                                            <th>EDITAR</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        
                                    </tfoot>
                                    <tbody>
                                    @foreach($clientes as $cliente)
                                        <tr>
                                            <td>{{$cliente->id}}</td>
                                            <td>{{$cliente->nombre}}</td>
                                            <td>{{$cliente->documento}}</td>
                                            <td>{{$cliente->direccion}}</td>
                                            <td>{{$cliente->telefono}}</td>
                                            <td>{{$cliente->correo}}</td>
                                            <td>{{$cliente->sexocliente->nombre}}</td>
                                            <td  width="10px">
                                            @can('clientes.show')
                                            <a href="{{ route('clientes.show', $cliente->id) }}"
                                               class="btn btn-sm btn-default">
                                            VER
                                            </a>
                                            @endcan
                                            </td>
                                            <td  width="10px">
                                            @can('clientes.edit')
                                            <a href="{{ route('clientes.edit', $cliente->id) }}"
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