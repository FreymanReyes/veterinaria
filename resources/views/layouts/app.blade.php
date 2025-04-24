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
</head>

<body style="background-color: #0D59FD" class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>SCOBY DOO LBP</b></a>
            <!-- <small>Admin BootStrap Based - Material Design</small> -->
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="msg">Inicia sesión</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <!-- <input type="text" class="form-control" name="username" placeholder="Username" required autofocus> -->
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo" autofocus name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <!-- <input type="password" class="form-control" name="password" placeholder="Password" required> -->
                            <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="row" >
                        
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">INGRESAR</button>
                        </div>
                        
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{!! asset('plugins/jquery/jquery.min.js') !!}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{!! asset('plugins/bootstrap/js/bootstrap.js') !!}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{!! asset('plugins/node-waves/waves.js') !!}"></script>

    <!-- Validation Plugin Js -->
    <script src="{!! asset('plugins/jquery-validation/jquery.validate.js') !!}"></script>

    <!-- Custom Js -->
    <script src="{!! asset('js/admin.js') !!}"></script>
    <script src="{!! asset('js/pages/examples/sign-in.js') !!}"></script>
</body>

</html>

