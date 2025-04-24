<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SCOBY DOO LBP</title>

    <!-- Favicon-->
    <link rel="icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="{!! asset('https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('https://fonts.googleapis.com/icon?family=Material+Icons') !!}" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{!! asset('plugins/bootstrap/css/bootstrap.css') !!}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{!! asset('plugins/node-waves/waves.css') !!}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{!! asset('plugins/animate-css/animate.css') !!}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">


    <link href="{!! asset('css/sweetalert2.min.css') !!}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{!! asset('plugins/sweetalert/sweetalert.css') !!}" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Cargando...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->


    <!-- Top Bar -->
    <nav style="background-color: #0D59FD; " class="navbar">
        <div class="container-fluid">
            <div  class="navbar-header">
                <a style="color:white;" href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a style="color:white;" href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" style="color:white;">PELUQUERIA CANINA Y PETSHOP - SCOBY DOO LBP</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            @include('perfil.perfil')
            <!-- #User Info -->
            <!-- Menu -->
            @include('menu.menu')
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; sistema de veterinaria
                </div>
                <!-- <div class="version">
                    <b>Version: </b> 1.0.5
                </div> -->
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>

   
    @yield('content')
    <!-- Jquery Core Js -->
    <script src="{!! asset('plugins/jquery/jquery.min.js') !!}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{!! asset('plugins/bootstrap/js/bootstrap.js') !!}"></script>

    <!-- Select Plugin Js -->
    <script src="{!! asset('plugins/bootstrap-select/js/bootstrap-select.js') !!}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{!! asset('plugins/jquery-slimscroll/jquery.slimscroll.js') !!}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{!! asset('plugins/node-waves/waves.js') !!}"></script>
    <script src="{!! asset('plugins/sweetalert/sweetalert.min.js') !!}"></script>

    <!-- Custom Js -->
    <script src="{!! asset('js/admin.js') !!}"></script>
    <script src="{!! asset('js/pages/tables/jquery-datatable.js') !!}"></script>
    <script src="{!! asset('js/pages/ui/modals.js') !!}"></script>

    <!-- Demo Js -->
    <script src="{!! asset('js/demo.js') !!}"></script>
    <script src="{!! asset('js/personalizados/compras.js') !!}"></script>
    <script src="{!! asset('js/personalizados/facturas.js') !!}"></script>
    
    


    
    <!-- Jquery DataTable Plugin Js -->
    <script src="{!! asset('plugins/jquery-datatable/jquery.dataTables.js') !!}"></script>
    <script src="{!! asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') !!}"></script>
    <script src="{!! asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') !!}"></script>
    <script src="{!! asset('plugins/jquery-datatable/extensions/export/buttons.flash.min.js') !!}"></script>
    <script src="{!! asset('plugins/jquery-datatable/extensions/export/jszip.min.js') !!}"></script>
    <script src="{!! asset('plugins/jquery-datatable/extensions/export/pdfmake.min.js') !!}"></script>
    <script src="{!! asset('plugins/jquery-datatable/extensions/export/vfs_fonts.js') !!}"></script>
    <script src="{!! asset('plugins/jquery-datatable/extensions/export/buttons.html5.min.js') !!}"></script>
    <script src="{!! asset('plugins/jquery-datatable/extensions/export/buttons.print.min.js') !!}"></script>
</body>

</html>
