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
                                EDITAR CLIENTE
                            </h2>
                           
                        </div>
                        <div class="body">
                            @include('clientes.partials.mensajes')
                            <!-- <form class="form-horizontal"> -->
                                {!! Form::model($cliente, ['route'=>['clientes.update', $cliente->id], 'method'=>'PUT']) !!}

                                @include('clientes.partials.form')

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