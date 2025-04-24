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
                                {{$role->name}} <small>{{$role->slug}}</small>
                            </h2>
                            
                        </div>
                        <div class="body">
                            
                            {{$role->description}}
                        </div>
                        <span>
                             @can('roles.index')
                                 <a href="{{route('roles.index')}}"
                                     class="btn btn-sm bg-blue ">
                                 VOLVER
                                 </a>
                             @endcan
                             </span>
                                   
                                
                             <span> 
                             @can('roles.edit')
                                     <a href="{{ route('roles.edit', $role->id) }}"
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