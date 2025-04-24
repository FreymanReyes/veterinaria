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
                        @can('compras.create')
                                <a href="{{ route('compras.create') }}"
                                   class="btn btn-sm btn-primary pull-right">
                                    NUEVA COMPRA
                                </a>
                            @endcan
                            <h2>
                                <!-- EXPORTABLE TABLE -->
                            COMPRAS DEL SISTEMA
                            </h2>                           
                            </div>
                    <div class="body">
                    @include('compras.partials.mensajes')
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>FACTURA</th>
                                            <th>PROVEEDOR</th>
                                            <th>CANTIDAD</th>
                                            <th>IVA</th>
                                            <th>TOTAL</th>
                                            <th>TIPO</th>
                                            <th>ESTADO</th>
                                            <th>VER</th>
                                            <th>PAGAR</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        
                                    </tfoot>
                                    <tbody>
                                    @foreach($compras as $compra)
                                        <tr>
                                            <td>{{$compra->compra}}</td>
                                            <td>{{$compra->proveedor}}</td>
                                            <td>{{$compra->cantidad}}</td>
                                            <td>{{$compra->iva}}</td>
                                            <td>{{$compra->total}}</td>
                                            <td>{{$compra->tipo}}</td>
                                            @if($compra->estado == 'PAGA')
                                            <td>
                                            <button type="button" class="btn btn-success">{{ $compra->estado }}</button>
                                            </td>
                                            @else
                                            <td>
                                            <button type="button" class="btn btn-danger">{{ $compra->estado }}  Dias Mora : {{ $compra->mora }}</button>
                                            </td>
                                            @endif
                                            <td width="10px"  width="10px">
                                            @can('compras.show')
                                        
                                            {!! Form::model($compra, ['route'=>['compras.show', $compra->compra], 'method'=>'GET']) !!}
                                            {{Form::submit('VER', ['class' => 'btn btn-sm btn-default'])}}
                                            {!!Form::close()!!}
                                          
                                            @endcan
                                            </td>
                                            <td>
                                            @can('compras.edit')
                                            @if($compra->estado == 'PAGA')
                                            <button disabled type="button" class="btn btn-warning">PAGAR</button>
                                            @else
                                            {!! Form::model($compra, ['route'=>['compras.update', $compra->compra], 'method'=>'PUT']) !!}
                                            {{Form::submit('PAGAR', ['class' => 'btn btn-sm btn-warning'])}}
                                            {!!Form::close()!!}
                                          
                                            @endif
                                            @endcan
                                            </td>
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