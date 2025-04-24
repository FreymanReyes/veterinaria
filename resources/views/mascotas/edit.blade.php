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
                                EDITAR MASCOTA
                            </h2>
                           
                        </div>
                        <div class="body">
                            @include('mascotas.partials.mensajes')
                            <!-- <form class="form-horizontal"> -->
                                {!! Form::model($mascota, ['route'=>['mascotas.update', $mascota->id], 'method'=>'PUT']) !!}

                                @include('mascotas.partials.form')

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