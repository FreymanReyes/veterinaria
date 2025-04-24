@extends('layout')

@section('content')
<section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
            <div class="block-header">
                <h2></h2>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-green hover-expand-effect">
                <a  href="{{route('facturas.create')}}">
                        <div class="icon">
                            <i class="material-icons">add_shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text">CAJA DEL DIA</div>
                            <!-- <div class="text">REGISTRADORA</div> -->
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">{{ number_format($total_caja[0]->total ,0 ) }}</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-red hover-expand-effect">
                    <a  href="{{route('productos.index')}}">
                        <div class="icon">
                            <i class="material-icons">library_books</i>
                        </div>
                        <div class="content">
                            <div class="text">PRODUCTOS</div>
                            <div class="text">DEL SISTEMA</div>
                            <!-- <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">CAJA</div> -->
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div  class="info-box bg-purple hover-expand-effect">
                    <a  href="{{route('compras.create')}}">
                   
                        <div class="icon">
                            <i class="material-icons">unarchive</i>
                        </div>
                        <div class="content">
                            
                            <div class="text">CARGAR</div>
                            <div class="text">COMPRA</div>
                            
                            <!-- <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">CAJA</div> -->
                        </div>
                    
                    </a>
                    </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text">VENTAS DEL MES</div>
                            <!-- <div class="text">DEL MES</div> -->
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">
                            @if($total_mes[0]->total == null)
                                0
                            @else
                            {{number_format($total_mes[0]->total ,0 )}}
                            @endif
                            </div>
                        </div>
                </div>
            </div>
            
        </div>



        <!-- <div  class="row clearfix"> -->
                <!-- With Captions -->
                <div   class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div style="text-align:center; " class="card">
                        <!-- <div class="header"> -->
                            <!-- <h2>WITH CAPTIONS</h2> -->
                            <!-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        <!-- </div> -->
                        <div class="body">
                            <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic_2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic_2" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic_2" data-slide-to="2"></li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/image-gallery/perros3.png" />
                                        <div class="carousel-caption">
                                            <!-- <h3>Primer Imagen</h3> -->
                                            <!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/image-gallery/perros4.png" />
                                        <div class="carousel-caption">
                                            <!-- <h3>Segunda Imagen</h3> -->
                                            <!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/image-gallery/perros6.png" />
                                        <div class="carousel-caption">
                                            <!-- <h3>Tercer Imagen</h3> -->
                                            <!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Siguiente</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# With Captions -->
            <!-- </div> -->
    </section>
@endsection
