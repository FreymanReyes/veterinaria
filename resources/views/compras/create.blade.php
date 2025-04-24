@extends('layout')
@section('content')
<section class="content">
    <div class="container-fluid">
       <!-- Color Pickers -->
       <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CARGAR COMPRA
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <b>PROVEEDOR</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <select id="proveedor" class="form-control">
                                                <option selected disabled>Seleciona una opcion</option>
                                                @foreach($proveedores as $proveedor)
                                                <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <b>TIPO DE FACTURA</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <!-- <input type="text" class="form-control" value="rgba(0,0,0,0.7)"> -->
                                            <select id="tipo_factura_compra" class="form-control">
                                                <option value="" selected disabled>Seleciona una opcion</option>
                                                <option value="1">Contado</option>
                                                <option value="2">Credito</option>
                                            </select>
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <b>NUMERO DE FACTURA</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input id="numero_fac_comp" type="text" class="form-control">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <b>IVA DE LA FACTURA</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input id="iva_comp" type="number" class="form-control" value="0">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="fechas_fac_comp" style="display:none" class="body">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <b>FECHA ACTUAL</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input value="<?php echo date("Y-m-d");?>" id="fecha_actual" type="date" class="form-control">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <b>FECHA DE PAGO CREDITO</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input min="<?php echo date("Y-m-d");?>" id="fecha_limite_pago" type="date" class="form-control" >
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Color Pickers -->







            <!-- Color Pickers -->
       <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                AGREGAR PRODUCTOS
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-3">
                                    <b>CODIGO DEL PRODUCTO</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input type="text" id="codigo_compra" class="form-control" >
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <b>UND MEDIDA</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <!-- <input type="number" id="cantidad_compra" class="form-control" value=""> -->
                                            <select id="undmedida" class="form-control">
                                                <option VALUE="" selected disabled>Seleciona una opcion</option>
                                                
                                                <option value="1">UND</option>
                                                <option value="2">KL</option>
                                               
                                            </select>
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <b>CANTIDAD</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input type="number" id="cantidad_compra" class="form-control" value="">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <b>PRECIO</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input type="number" id="precio_compra" class="form-control" value="">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                            <button id="agregar_productos_compra" class="btn btn-sm bg-green pull-right">
                                AGREGAR
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Color Pickers -->









               <!-- Color Pickers -->
       <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            PRODUCTOS AGREGADOS
                        </h2>
                    </div>
                    <div class="body">
                    <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead id="encabezado_compras">
                                        <tr>
                                            <th>CODIGO</th>
                                            <th style="display:none">UND MEDIDA ID</th>
                                            <th>UND MEDIDA</th>
                                            <th>CANTIDAD</th>
                                            <th>PRECIO</th>
                                            <th>ACCION</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                   
                                    </tfoot>
                                </table>
                                <button id="guardar_compra" class="btn btn-sm bg-blue pull-right">
                                    REGISTRAR COMPRA
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- #END# Color Pickers -->
    </div>
</section>
@endsection