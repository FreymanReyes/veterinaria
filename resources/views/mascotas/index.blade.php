@extends('layout')
@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <!-- @can('mascotas.create')
                                <a href="{{ route('mascotas.create') }}"
                                   class="btn btn-sm btn-primary pull-right">
                                    CREAR
                                </a>
                            @endcan -->
                            <h2>
                                <!-- EXPORTABLE TABLE -->
                                MASCOTAS DEL SISTEMA
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
                        @include('mascotas.partials.mensajes')
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>EDAD</th>
                                            <th>TIPO</th>
                                            <th>TIPO MASCOTA</th>
                                            <th>RAZA</th>
                                            <th>SEXO</th>
                                            <th>PROPIETARIO</th>
                                            <th>VER</th>
                                            <th>EDITAR</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        
                                    </tfoot>
                                    <tbody>
                                    @foreach($mascotas as $mascota)
                                        <tr>
                                            <td>{{$mascota->id}}</td>
                                            <td>{{$mascota->nombre}}</td>
                                            <td>{{$mascota->edad}}</td>
                                            <td>{{$mascota->tipo}}</td>
                                            @if($mascota->t_raza == '1')
                                            <td>
                                            PERRO
                                            </td>
                                            @else
                                            <td>
                                            GATO
                                            </td>
                                            @endif
                                            <td>{{$mascota->raza}}</td>
                                            <td>{{$mascota->sexo}}</td>
                                            <td>{{$mascota->cliente}}</td>
                                            <td  width="10px">
                                            @can('mascotas.show')
                                            <a href="{{ route('mascotas.show', $mascota->id) }}"
                                               class="btn btn-sm btn-default">
                                            VER
                                            </a>
                                            @endcan
                                            </td>
                                            <td  width="10px">
                                            @can('mascotas.edit')
                                            <a href="{{ route('mascotas.edit', $mascota->id) }}"
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