<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
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
    <link href="{{ asset('admin/assets/dropify/css/dropify.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/admin.css') }}" rel="stylesheet">
</head>
<body class="hold-transition skin-red fixed sidebar-mini">
    <div id="app">
        <div id="wrapper">
            <header class="main-header crm-style">
                <a href="{{url('home')}}" class="logo crm-style">
                <span class="logo-mini">
                    <img src="{{asset('images/logo.png')}}" class="img-responsive crm-image">
                </span>
                    <span class="logo-lg">
                    <img src="{{asset('images/logo2.png')}}" class="img-responsive crm-image">
                </span>
                </a>
                <nav class="navbar navbar-static-top crm-style">
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('images/ricardo.jpg')}}" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Ricardo</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header crm-style">
                                        <img src="{{ asset('images/ricardo.jpg')}}" class="img-circle" alt="User Image">
                                        <p>
                                            Ricardo
                                            <small>Membro desde {{'10/10/2008'}}</small>
                                        </p>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="{{url('/painel/perfil')}}" class="btn btn-default btn-flat">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a class="btn btn-default btn-flat" onclick="$('#logout').submit();">Sair</a>
                                            <form id="logout" action="/logout" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>


            @include('layout.lateral')

            <div class="content-wrapper">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('content')
            </div>

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Versão</b> 1.0.0
                </div>
                <strong>Copyright &copy; 2018 <a href="http://tmontec.com.br">Tmontec Soluções em Tecnologia</a>.</strong>
            </footer>
        </div>
    </div>
    
    @include('layout.modal')
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <!-- Scripts -->
    <script src="{{ asset('admin/assets/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('admin/assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('admin/assets/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('admin/assets/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('admin/assets/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/admin.js') }}"></script>
    <script>
        $(function(){
            $('.table').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "language": {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "_MENU_ resultados por página",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "Pesquisar",
                    "oPaginate": {
                        "sNext": "<i class='fa fa-arrow-right'></i>",
                        "sPrevious": "<i class='fa fa-arrow-left'></i>",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
                    },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                    }
                }
            });

            $('.dropify').dropify();
        });

        function setRoute(id, tabela)
        {
            var url = '/' + tabela + '/' + 'deletar' + '/' + id;
            $('#deleteForm').attr('action', url);
        } 

        function getDonations(id)
        {
            $('#doacoes').html("");

            var form_data = {
                id : id
            };

            $.ajax({
                type     : "GET",    
                url      : '/getPayments', 
                dataType : 'json',
                data     : form_data            
            }).done(function(data) {
                var doacoes = '';
                if (data) {
                    for (x in data) {
                        doacoes += '<tr>';
                        doacoes += '<td>' + data[x].nome           + '</td>';
                        doacoes += '<td>' + data[x].dt_recebimento + '</td>';
                        doacoes += '<td>' + data[x].valor_bruto    + '</td>';
                        doacoes += '<td>' + data[x].valor_liquido  + '</td>';
                        doacoes += '<td>' + data[x].taxa           + '</td>';
                        doacoes += '</tr>';
                    }

                    $('#doacoes').html(doacoes);
                }
            });            
        } 
    </script>
</body>
</html>
