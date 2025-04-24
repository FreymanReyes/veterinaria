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
                                EDITAR SERVICIO
                            </h2>
                           
                        </div>
                        <div class="body">
                            @include('servicios.partials.mensajes')
                            <!-- <form class="form-horizontal"> -->
                                {!! Form::model($servicio, ['route'=>['servicios.update', $servicio->id], 'method'=>'PUT']) !!}

                                @include('servicios.partials.form')

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