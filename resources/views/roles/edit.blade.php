@extends('layout')
@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <!-- <h2>FORM EXAMPLES</h2> -->
            </div>

           
            <!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDITAR ROL
                            </h2>
                           
                        </div>
                        <div class="body">
                            @include('roles.partials.mensajes')
                            <!-- <form class="form-horizontal"> -->
                                {!! Form::model($role, ['route'=>['roles.update', $role->id], 'method'=>'PUT']) !!}

                                @include('roles.partials.form')

                                {!! Form::close() !!}
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
            
        </div>
    </section>


    
@endsection