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
                                NUEVO PROVEEDOR
                            </h2>
                           
                        </div>
                        <div class="body">
                            @include('proveedores.partials.mensajes')
                                {!! Form::open( ['route'=>['proveedores.store']]) !!}

<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        {{Form::label('nombre','Nombre')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                 {{Form::text('nombre',null,['class'=>'form-control' , 'placeholder'=>'Ingresa un nombre'])}}
            </div>
        </div>
    </div>
</div>


<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        {{Form::label('nit','Nit')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                 {{Form::text('nit',null,['class'=>'form-control ', 'id'=>'email_address_2', 'placeholder'=>'Ingresa el nit o numero de documento'])}}
            </div>
        </div>
    </div>
</div>


<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        {{Form::label('direccion','Direccion')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                {{Form::text('direccion','',['class'=>'form-control ', 'placeholder'=>'Ingresa una direccion'])}}
            </div>
        </div>
    </div>
</div>


<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        {{Form::label('telefono','Telefono')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                {{Form::text('telefono','',['class'=>'form-control ', 'placeholder'=>'Ingresa un numero telefonico'])}}
            </div>
        </div>
    </div>
</div>



<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        {{Form::label('tipo_proveedor','Tipo de proveedor')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                 {{Form::select('tipo_proveedor',['1'=>'PRODUCTOS','2'=>'SERVICIOS'],null,['class'=>'form-control','placeholder' => 'Seleccione una opcion'])}}
            </div>
        </div>
    </div>
</div>


<div class="row clearfix">
    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
        <a href="{{route('proveedores.index')}}"><button type="button"  class="btn btn-primary m-t-15 waves-effect">VOLVER</button></a>
        {{Form::submit('Guardar', ['class'=>'btn btn-success m-t-15 waves-effect bg-green pull-right'])}}
    </div>
</div>

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