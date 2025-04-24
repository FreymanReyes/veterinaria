@extends('layout')
@section('content')
<section class="content">
    <div class="container-fluid">
       <!-- Color Pickers -->
       <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">

<!-- Modal Size Example -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h4 class="modal-title" id="defaultModalLabel">ABRIR CAJA DEL DIA.</h4> -->
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <b>VALOR INICIAL DE LA CAJA $:</b>
                    <div class="input-group colorpicker">
                        <div class="form-line">
                            <input id="saldo_inicial_caja"  type="number" value="0" class="form-control">
                        </div>
                        <span class="input-group-addon">
                            <i></i>
                        </span>
                    </div>
                </div>
            <br>
            <br>
            </div>
            <div class="modal-footer">
                <button type="button" id="guardar_abrir_caja" class="btn btn-success waves-effect">GUARADAR</button>
                <button type="button" id="cerrar_abrir_caja" class="btn btn-danger waves-effect" data-dismiss="modal">CERRAR</button>
            </div>
        </div>
    </div>
</div>
<!-- #END# Modal Size Example -->
<!-- Modal Size Example -->
<div class="modal fade" id="defaultModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h4 class="modal-title" id="defaultModalLabel">ABRIR CAJA DEL DIA.</h4> -->
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <b>VALOR FINAL DE LA CAJA $:</b>
                    <div class="input-group colorpicker">
                        <div class="form-line">
                            <input id="saldo_final_caja" type="number" value="0" class="form-control">
                        </div>
                        <span class="input-group-addon">
                            <i></i>
                        </span>
                    </div>
                </div>
            <br>
            <br>
            </div>
            <div class="modal-footer">
                <button type="button" id="guardar_cerrar_caja" class="btn btn-success waves-effect">GUARADAR</button>
                <button type="button" id="cerrar_cerrar_caja" class="btn btn-danger waves-effect" data-dismiss="modal">CERRAR</button>
            </div>
        </div>
    </div>
</div>
<!-- #END# Modal Size Example -->
<!-- Modal Size Example -->
<div class="modal fade" id="defaultModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h4 class="modal-title" id="defaultModalLabel">ABRIR CAJA DEL DIA.</h4> -->
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <b>NOMBRE :</b>
                    <div class="input-group colorpicker">
                        <div class="form-line">
                            <input id="nombre_modal" type="text" value="" class="form-control">
                        </div>
                        <span class="input-group-addon">
                            <i></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-12">
                    <b>DOCUMENTO :</b>
                    <div class="input-group colorpicker">
                        <div class="form-line">
                            <input id="cc_modal" type="number" value="" class="form-control">
                        </div>
                        <span class="input-group-addon">
                            <i></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-12">
                    <b>DIRECCIÓN :</b>
                    <div class="input-group colorpicker">
                        <div class="form-line">
                            <input id="direccion_modal" type="text" value="" class="form-control">
                        </div>
                        <span class="input-group-addon">
                            <i></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-12">
                    <b>SEXO :</b>
                    <div class="input-group colorpicker">
                        <div class="form-line">
                            <select id="sexo_modal"  class="form-control">
                            <option disabled selected value="">Selecciona una opcion</option>
                            @foreach($sexo as $sexos)
                            <option value="{{$sexos->id}}">{{$sexos->nombre}}</option>
                            @endforeach
                            </select>
                        </div>
                        <span class="input-group-addon">
                            <i></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-12">
                    <b>TELEFONO :</b>
                    <div class="input-group colorpicker">
                        <div class="form-line">
                            <input id="telefono_modal" type="number" value="" class="form-control">
                        </div>
                        <span class="input-group-addon">
                            <i></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-12">
                    <b>CORREO :</b>
                    <div class="input-group colorpicker">
                        <div class="form-line">
                            <input id="correo_modal" type="email" value="" class="form-control">
                        </div>
                        <span class="input-group-addon">
                            <i></i>
                        </span>
                    </div>
                </div>

            <br>
            <br>
            </div>
            <div class="modal-footer">
                <button type="button" id="guardar_modal_cliente" class="btn btn-success waves-effect">GUARADAR</button>
                <button type="button" id="cerrar_modal_cliente" class="btn btn-danger waves-effect" data-dismiss="modal">CERRAR</button>
            </div>
        </div>
    </div>
</div>
<!-- #END# Modal Size Example -->






<!-- Modal Size Example -->
<div class="modal fade" id="defaultModal4" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h4 class="modal-title" id="defaultModalLabel">ABRIR CAJA DEL DIA.</h4> -->
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <b>NOMBRE :</b>
                    <div class="input-group colorpicker">
                        <div class="form-line">
                            <input id="nombre_modal_mascota" type="text" value="" class="form-control">
                        </div>
                        <span class="input-group-addon">
                            <i></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-12">
                    <b>EDAD :</b>
                    <div class="input-group colorpicker">
                        <div class="form-line">
                            <input id="edad_modal_mascota" type="number" value="" class="form-control">
                        </div>
                        <span class="input-group-addon">
                            <i></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-12">
                    <b>TIPO DE EDAD :</b>
                    <div class="input-group colorpicker">
                        <div class="form-line">
                            <select id="tipo_modal_mascota"  class="form-control">
                            <option disabled selected value="">Selecciona una opcion</option>
                            @foreach($tipo_edades as $tipo)
                            <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                            @endforeach
                            </select>
                        </div>
                        <span class="input-group-addon">
                            <i></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-12">
                    <b>SEXO :</b>
                    <div class="input-group colorpicker">
                        <div class="form-line">
                            <select id="sexo_modal_mascota"  class="form-control">
                            <option disabled selected value="">Selecciona una opcion</option>
                            @foreach($sexo as $sexos)
                            <option value="{{$sexos->id}}">{{$sexos->nombre}}</option>
                            @endforeach
                            </select>
                        </div>
                        <span class="input-group-addon">
                            <i></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-12">
                    <b>RAZA :</b>
                    <div class="input-group colorpicker">
                        <div class="form-line">
                            <select id="raza_modal_mascota"  class="form-control">
                            <option disabled selected value="">Selecciona una opcion</option>
                            @foreach($razas as $raza)
                            <option value="{{$raza->id}}">{{$raza->nombre}}</option>
                            @endforeach
                            </select>
                        </div>
                        <span class="input-group-addon">
                            <i></i>
                        </span>
                    </div>
                </div>


            <br>
            <br>
            </div>
            <div class="modal-footer">
                <button type="button" id="guardar_modal_mascota" class="btn btn-success waves-effect">GUARADAR</button>
                <button type="button" id="cerrar_modal_mascota" class="btn btn-danger waves-effect" data-dismiss="modal">CERRAR</button>
            </div>
        </div>
    </div>
</div>
<!-- #END# Modal Size Example -->
<input style="display:none" id="id_cliente" type="number" value="" class="form-control">

                        @can('cajas.create')
                            @if(count($caja)==0)
                            <strong><span class=" pull-right"> CAJA CERRADA </span></strong>
                            <br>
                            <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#defaultModal">ABRIR CAJA</button>
                            @else
                            <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#defaultModal2">CERRAR CAJA</button>
                            @endif
                        @endcan
                        @if(count($caja)>0)
                        <input style="display:none" id="id_caja" type="number" value="{{$caja[0]->id}}" class="form-control">
                        @endif
                            <h2>
                                CAJA REGISTRADORA
                            </h2>
                        </div>
                        @if(count($caja)==0)
                        <div class="alert alert-info">
                            DEBES ABRIR LA CAJA ANTES DE PODER FACTURAR.
                        </div>
                        @else
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <b>DOCUMENTO DEL CLIENTE:</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input id="numero_cc" type="number" class="form-control">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <b>NOMBRE DEL CLIENTE</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input disabled id="nombre_cliente" type="text" class="form-control">
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
                                <div class="col-md-4">
                                    <b>TIPO</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                        <select id="tipo"  class="form-control">
                                            <option disabled selected value="">Selecciona una opcion</option>
                                            <option value="1">SERVICIO</option>
                                            <option value="2">PRODUCTO</option>
                                        </select>
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div id="mas_con" style="display:block" class="col-md-4">
                                    <b>MASCOTAS DEL CLIENTE</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                        <select id="mascota"  class="form-control">

                                            <option disabled selected value="">Selecciona una opcion</option>

                                        </select>
                                        </div>
                                        <span class="input-group-addon">
                                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#defaultModal4">
                                            <div class="icon">
                                                <i class="material-icons">add</i>
                                             </div>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>IVA</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                        <select id="iva_condicion"  class="form-control">
                                            <option selected value="19">SI</option>
                                            <option value="0">NO</option>
                                        </select>
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
       <div id="div_agg_pro" style="display:none" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                AGREGAR PRODUCTOS
                            </h2>
                            <input style="display:none" type="text" id="id_product_buscado" class="form-control" >
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-3">
                                    <b>CODIGO DEL PRODUCTO</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input type="text" id="codigo_producto" class="form-control" >
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <b>DESCUENTO</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input min="1" type="number" id="descuento_compra" class="form-control" value="0">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <b>CANTIDAD</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input min="1" type="number" id="cantidad_compra" class="form-control" value="">
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
                                            <input min="1" type="number" id="precio_compra" class="form-control" value="">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <b>TOTAL</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input disabled type="number" id="total_compra" class="form-control" value="">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                            <button id="agregar_productos_compra2" class="btn btn-sm bg-green pull-right">
                                AGREGAR
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Color Pickers -->




        <!-- Color Pickers -->
       <div id="div_agg_serv" style="display:none" class="row clearfix">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                AGREGAR SERVICIOS
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-3">
                                    <b>SERVICIOS</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <select id="servicio_agg"  class="form-control">
                                                <option disabled selected value="">Selecciona una opcion</option>
                                                @foreach($servicios as $servicio)
                                                    <option value="{{$servicio->id}}">{{$servicio->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <b>DESCUENTO</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input min="1" type="number" id="descuento_compra_serv" class="form-control" value="0">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <b>CANTIDAD</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input min="1" type="number" id="cantidad_compra_serv" class="form-control" value="">
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
                                            <input min="1" type="number" id="precio_compra_serv" class="form-control" value="">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <b>TOTAL</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input disabled type="number" id="total_compra_serv" class="form-control" value="">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                            <button id="agregar_servicios_compra" class="btn btn-sm bg-green pull-right">
                                AGREGAR
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Color Pickers -->
            

            <!-- Color Pickers -->
            <!-- <div id="div_pro_agg" style="display:none" class="row clearfix"> -->
            <div  class="row clearfix">
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
                                    <thead id="encabezado_pr_fac">
                                        <tr>
                                            <th>CODIGO</th>
                                            <th style="display: none">ID</th>
                                            <th>CANTIDAD</th>
                                            <th>PRECIO</th>
                                            <th>TOTAL</th>
                                            <th>DESCUENTO</th>
                                            <th>ACCION</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <!-- Exportable Table -->
                            <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card ">
                                            <div class="header">                          
                                            </div>
                                            <div class="body">
                                                <!-- <p>Total Efectivo: <span id=""></span></p>
                                                <p>Cambio: <span id=""></span></p>
                                                <br> -->
                                                <p>SUB - TOTAL: $ <span id="subtotal"></span> </p>
                                                <p>IVA: $ <span id="total_iva"></span></p>
                                                <!-- <p>DESCUENTO: % <span style="display:block" id=""></span> </p> -->
                                                <hr>
                                                <h3><b>Total :</b> $<span id="total_global" class="precio-total">0.0</span></h3>
                                            </div>
                                        </div>
                                    <button id="facturar" disabled class="btn btn-sm bg-blue pull-right">
                                        REGISTRAR FACTURA
                                    </button>
                                    </div>
                            </div>
                            <!-- #END# Exportable Table -->
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- #END# Color Pickers -->        
    </div>
    </section>
@endsection





