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
                                <!-- EXPORTABLE TABLE -->
                            CAJAS DEL SISTEMA
                            </h2>                           
                            </div>
                    <div class="body">
                    @include('cajas.partials.mensajes')
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>ID CAJA</th>
                                            <th>SALDO INICIAL</th>
                                            <th>SALDO FINAL</th>
                                            <th>SALDO FACTURADO</th>
                                            <th>USUARIO DE APERTURA</th>
                                            <th>USUARIO DE CIERRE</th>
                                            <th>FECHA APERTURA</th>
                                            <th>FECHA CIERRE</th>
                                            <th>ESTADO</th>
                                            <th>ACCION</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        
                                    </tfoot>
                                    <tbody>
                                    @foreach($cajas as $caja)
                                        <tr>
                                            <td>CAJA-{{$caja->id}}</td>
                                            <td>{{$caja->monto_inicial}}</td>
                                            <td>{{$caja->monto_final}}</td>
                                            <td>{{$caja->total}}</td>
                                            <td>{{$caja->usuario_apertura}}</td>
                                            <td>{{$caja->usuario_cierre}}</td>


                                            <td>{{$caja->created_at}}</td>
                                            <td>{{$caja->updated_at}}</td>
                                            @if($caja->estado == '1')
                                            <td>
                                            <button type="button" class="btn btn-success">ON</button>
                                            </td>
                                            
                                            <td>
                                            {!! Form::model($caja, ['route'=>['editar_caja', $caja->id], 'method'=>'PUT']) !!}
                                            {{Form::submit('CERRAR', ['class' => 'btn btn-sm btn-warning'])}}
                                            {!!Form::close()!!}
                                            </td>
                                            
                                            @else
                                            <td>
                                            <button type="button" class="btn btn-danger">OFF</button>
                                            </td>
                                            
                                            <td>
                                            <button disabled type="button" class="btn btn-sm btn-warning">CERRADA</button>
                                            </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                     </div>
                  </div>
        </div>
        <!-- #END# Horizontal Layout -->
    </div>
</section>


    
@endsection