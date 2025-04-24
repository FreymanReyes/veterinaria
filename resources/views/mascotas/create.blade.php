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
                                NUEVO PRODUCTO
                            </h2>
                           
                        </div>
                        <div class="body">
                            @include('productos.partials.mensajes')
                                {!! Form::open( ['route'=>['productos.store']]) !!}

                                <div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="email_address_2">Email Address</label> -->
        {{Form::label('nombre','Nombre')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                 -->
                 {{Form::text('nombre',null,['class'=>'form-control' , 'placeholder'=>'Ingresa un nombre'])}}
            </div>
        </div>
    </div>
</div>


<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="email_address_2">Email Address</label> -->
        {{Form::label('codigo','Codigo')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                 -->
                 {{Form::text('codigo',null,['class'=>'form-control ', 'id'=>'email_address_2', 'placeholder'=>'Ingresa un codigo'])}}
            </div>
        </div>
    </div>
</div>



<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="email_address_2">Email Address</label> -->
        {{Form::label('descripcion','Descripcion')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                 -->
                 {{Form::text('descripcion',null,['class'=>'form-control ', 'id'=>'email_address_2', 'placeholder'=>'Ingresa una descripción'])}}
            </div>
        </div>
    </div>
</div>


<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="password_2">Password</label> -->
        {{Form::label('precio','Precio')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="password" id="password_2" class="form-control" placeholder="Enter your password"> -->
                {{Form::number('precio',null,['class'=>'form-control ', 'id'=>'password_2', 'placeholder'=>'Ingresa un precio'])}}
            </div>
        </div>
    </div>
</div>





<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        {{Form::label('tipo_producto','Und De medida')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                 {{Form::select('tipo_producto',['1'=>'UND','2'=>'KL'],null,['class'=>'form-control','placeholder' => 'Seleccione una opcion'])}}
            </div>
        </div>
    </div>
</div>




<div class="row clearfix">
    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
        <a href="{{route('productos.index')}}"><button type="button"  class="btn btn-primary m-t-15 waves-effect">VOLVER</button></a>
        <!-- <button type="button" class="btn btn-success m-t-15 waves-effect bg-green pull-right">GUARDAR</button> -->
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