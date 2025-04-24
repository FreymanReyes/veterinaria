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
        {{Form::label('precio','Precio')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                 {{Form::number('precio',null,['class'=>'form-control ', 'placeholder'=>'Ingresa el precio del servicio'])}}
            </div>
        </div>
    </div>
</div>



<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        {{Form::label('id_proveedor','Proveedor')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                 {{Form::select('id_proveedor',$proveedores,null,['class'=>'form-control','placeholder' => 'Seleccione un proveedor'])}}
            </div>
        </div>
    </div>
</div>


<div class="row clearfix">
    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
        <a href="{{route('servicios.index')}}"><button type="button"  class="btn btn-primary m-t-15 waves-effect">VOLVER</button></a>
        {{Form::submit('Guardar', ['class'=>'btn btn-success m-t-15 waves-effect bg-green pull-right'])}}
    </div>
</div>