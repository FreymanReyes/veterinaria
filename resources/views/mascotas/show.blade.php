@extends('layout')
@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="{!! asset('images/mascotas.png') !!}" alt="AdminBSB - Profile Image" />
                            </div>
                            <div class="content-area">
                            
                                <h3>{{$mascota->nombre}}</h3>
                                <p>Edad: {{$mascota->edad}} {{ $mascota->tipo_edadmascota->nombre }}</p>
                                <!-- <p>Administrator</p> -->
                            </div>
                        </div>
                        <div class="profile-footer">
                            <ul>
                                <li>
                                    <span>SEXO MASCOTA</span>
                                    <span>{{ $mascota->sexomascota->nombre }}</span>
                                </li>
                                <li>
                                    <span>RAZA MASCOTA</span>
                                    <span>{{ $mascota->razamascota->nombre }}</span>
                                </li>
                                <h3>DATOS DEL PROPIETARIO</h3>
                                <hr>
                                <li>
                                    <span>CLIENTE</span>
                                    <span> {{ $mascota->clientemascota->nombre }} </span>
                                </li>
                                <li>
                                    <span>TELEFONO</span>
                                    <span>{{ $mascota->clientemascota->telefono }}</span>
                                </li>
                                <li>
                                    <span>DIRECCIÓN</span>
                                    <span>{{ $mascota->clientemascota->direccion }}</span>
                                </li>
                               
                                
                                <li>
                                    <span>
                                    @can('mascotas.index')
                                        <a href="{{route('mascotas.index')}}"
                                            class="btn btn-sm bg-blue ">
                                        VOLVER
                                        </a>
                                    @endcan
                                    </span>
                               
                            
                                    <span> 
                                    @can('mascotas.edit')
                                            <a href="{{ route('mascotas.edit', $mascota->id) }}"
                                               class="btn btn-sm bg-green">
                                            EDITAR
                                            </a>
                                    @endcan
                                    </span>
                                </li>
                            </ul>
                            <!-- <button class="btn btn-primary btn-lg waves-effect btn-block">FOLLOW</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection