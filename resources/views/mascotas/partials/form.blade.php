<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="email_address_2">Email Address</label> -->
        {{Form::label('nombre','NOMBRE')}}
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
        {{Form::label('edad','EDAD')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                 -->
                 {{Form::text('edad',null,['class'=>'form-control '])}}
            </div>
        </div>
    </div>
</div>



<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="email_address_2">Email Address</label> -->
        {{Form::label('id_tipos_edades','TIPO DE EDAD')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                 -->
                 {{Form::select('id_tipos_edades',$id_tipos_edades,null,['class'=>'form-control','placeholder' => 'Seleccione un tipo'])}}
            </div>
        </div>
    </div>
</div>



<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="email_address_2">Email Address</label> -->
        {{Form::label('raza','RAZA')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                 -->
                 {{Form::select('id_raza',$razas,null,['class'=>'form-control','placeholder' => 'Seleccione una raza'])}}
            </div>
        </div>
    </div>
</div>



<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="email_address_2">Email Address</label> -->
        {{Form::label('sexo','SEXO')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                 -->
                 {{Form::select('id_sexo',$sexos,null,['class'=>'form-control','placeholder' => 'Seleccione un sexo'])}}
            </div>
        </div>
    </div>
</div>




<div class="row clearfix">
    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
        <a href="{{route('mascotas.index')}}"><button type="button"  class="btn btn-primary m-t-15 waves-effect">VOLVER</button></a>
        <!-- <button type="button" class="btn btn-success m-t-15 waves-effect bg-green pull-right">GUARDAR</button> -->
        {{Form::submit('Guardar', ['class'=>'btn btn-success m-t-15 waves-effect bg-green pull-right'])}}
    </div>
</div>