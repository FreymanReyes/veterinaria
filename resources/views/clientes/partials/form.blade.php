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
                 {{Form::text('nombre',null,['class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>


<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="email_address_2">Email Address</label> -->
        {{Form::label('documento','Documento')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                 -->
                 {{Form::number('documento',null,['class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>



<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        {{Form::label('id_sexo','Sexo')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                 {{Form::select('id_sexo',$sexo,null,['class'=>'form-control','placeholder' => 'Seleccione un sexo'])}}
            </div>
        </div>
    </div>
</div>




<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="email_address_2">Email Address</label> -->
        {{Form::label('direccion','Dirección')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                 -->
                 {{Form::text('direccion',null,['class'=>'form-control ', 'id'=>'email_address_2'])}}
            </div>
        </div>
    </div>
</div>



<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="email_address_2">Email Address</label> -->
        {{Form::label('telefono','Telefono')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                 -->
                 {{Form::text('telefono',null,['class'=>'form-control ', 'id'=>'email_address_2'])}}
            </div>
        </div>
    </div>
</div>



<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="email_address_2">Email Address</label> -->
        {{Form::label('correo','Correo')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                 -->
                 {{Form::text('correo',null,['class'=>'form-control ', 'id'=>'email_address_2'])}}
            </div>
        </div>
    </div>
</div>



<div class="row clearfix">
    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
        <a href="{{route('clientes.index')}}"><button type="button"  class="btn btn-primary m-t-15 waves-effect">VOLVER</button></a>
        <!-- <button type="button" class="btn btn-success m-t-15 waves-effect bg-green pull-right">GUARDAR</button> -->
        {{Form::submit('Guardar', ['class'=>'btn btn-success m-t-15 waves-effect bg-green pull-right'])}}
    </div>
</div>