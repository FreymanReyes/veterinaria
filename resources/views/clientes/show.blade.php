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
                                <img src="{!! asset('images/user-lg.jpg') !!}" alt="AdminBSB - Profile Image" />
                            </div>
                            <div class="content-area">
                            
                                <h3>{{$cliente->nombre}}</h3>
                                <p>{{$cliente->documento}}</p>
                                <!-- <p>Administrator</p> -->
                            </div>
                        </div>
                        <div class="profile-footer">
                            <ul>
                                <li>
                                    <span>DIRECCIÓN</span>
                                    <span>{{ $cliente->direccion }}</span>
                                </li>
                                <li>
                                    <span>TELEFONO</span>
                                    <span>{{ $cliente->telefono }}</span>
                                </li>
                                <li>
                                    <span>CORREO ELECTRONICO</span>
                                    <span>{{ $cliente->correo }}</span>
                                </li>
                                <li>
                                    <span>SEXO</span>
                                    <span>{{ $cliente->sexocliente->nombre }}</span>
                                </li>
                                <li>
                                    <span>
                                    @can('clientes.index')
                                        <a href="{{route('clientes.index')}}"
                                            class="btn btn-sm bg-blue ">
                                        VOLVER
                                        </a>
                                    @endcan
                                    </span>
                               
                            
                                    <span> 
                                    @can('clientes.edit')
                                            <a href="{{ route('clientes.edit', $cliente->id) }}"
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