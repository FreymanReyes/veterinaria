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
                                <h3>{{$user->name}}</h3>
                                <p>{{$user->email}}</p>
                                <!-- <p>Administrator</p> -->
                            </div>
                        </div>
                        <div class="profile-footer">
                            <ul>
                                <li>
                                    <span>Contraseña</span>
                                    <span>{{ $user->password }}</span>
                                </li>
                                <li>
                                    <span>
                                    @can('users.index')
                                        <a href="{{route('users.index')}}"
                                            class="btn btn-sm bg-blue ">
                                        VOLVER
                                        </a>
                                    @endcan
                                    </span>
                               
                            
                                    <span> 
                                    @can('users.edit')
                                            <a href="{{ route('users.edit', $user->id) }}"
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