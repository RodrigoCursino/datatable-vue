<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('admin/assets/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/dist/css/AdminLTE.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/dist/css/skins/skin-red.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/iCheck/square/red.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/admin.css') }}" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">

    <!-- /.login-logo -->
    <div class="login-box-body" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Cubo Crm</h1>
            </div>
        </div>
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" placeholder="Digite seu E-mail" name="email">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="Digite sua senha">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Manter conectado
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a class="btn btn-link" href="{{ route('password.request') }}">
            Esqueceu sua senha?
        </a>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<div class="rights">
    <p>Solução desenvolvida por: <a href="http://tmontec.com.br" class="top_tmontec"><img src="{{asset('images/logo-tmontec_branco.png')}}" alt=""></a></p>
</div>

<!-- Scripts -->
<script src="{{ asset('admin/assets/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('admin/assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('admin/assets/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/admin.js') }}"></script>
</body>
</html>
