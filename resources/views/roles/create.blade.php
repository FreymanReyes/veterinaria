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
                    NUEVO ROL
                </h2>
               
            </div>
            <div class="body">
                @include('usuarios.partials.mensajes')
                <!-- <form class="form-horizontal"> -->
                    {!! Form::open( ['route'=>['roles.store']]) !!}

                    <div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="email_address_2">Email Address</label> -->
        {{Form::label('name','Nombre')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                 -->
                 {{Form::text('name',null,['class'=>'form-control' , 'placeholder'=>'Ingresa un nombre'])}}
            </div>
        </div>
    </div>
</div>


<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="email_address_2">Email Address</label> -->
        {{Form::label('slug','URL Amigable')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                 -->
                 {{Form::text('slug',null,['class'=>'form-control ', 'id'=>'email_address_2', 'placeholder'=>'Ingresa la url amigable'])}}
            </div>
        </div>
    </div>
</div>


<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="password_2">Password</label> -->
        {{Form::label('description','Descripcion')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="password" id="password_2" class="form-control" placeholder="Enter your password"> -->
                {{Form::text('description',null,['class'=>'form-control ', 'id'=>'password_2', 'placeholder'=>'Ingresa una descripcion acerca de este nuevo rol.'])}}
            </div>
        </div>
    </div>
</div>


<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="password_2">Password</label> -->
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="password" id="password_2" class="form-control" placeholder="Enter your password"> -->
                <label>{{ Form::radio('special','all-access') }} Acceso total</label>
                <label>{{ Form::radio('special','no-access') }} Ningun Acceso</label>
            </div>
        </div>
    </div>
</div>



<div class="row clearfix form-group">
  <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
    <ul >
        @foreach($permissions as $permission)
           <li>
               <label>
                {{ Form::checkbox('permissions[]', $permission->id, null,  ['class'=>'filled-in','id'=>'remember_me_3']) }}
                {{ $permission->name }}
                <em>({{ $permission->description ?: 'Sin Descripcion'}})</em>
                </label>
           </li>
        @endforeach
    </ul>
  </div>
</div>







<div class="row clearfix">
    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
        <a href="{{route('roles.index')}}"><button type="button"  class="btn btn-primary m-t-15 waves-effect">VOLVER</button></a>
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