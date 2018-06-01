@extends('layout.app')

@section('content')

<section class="content">
    <div class="container">
        <div class="row"><br>
            <div class="col-md-11">
                <div class="panel panel-dafault">
                    <div class="panel-heading crm-style"><b>Cadastrar novo Usuario</b></div>

                    <div class="panel-body">
                        <form action="{{ route('user.salvar1') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Usuario">
                                </div>

                                <div class="col-md-4">
                                    <label>Senha</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Digite a senha do usuario">
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-8">
                                    <label>E-mail</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="usuario@email.com.br">
                                </div>
                            </div><hr>                            

                            <div class="row">
                                <div class="col-md-3 col-md-offset-9">
                                    <a href="{{ route('user.listar') }}" class="btn btn-danger">
                                        <b>Cancelar <i class="fa fa-times"></i></b>
                                    </a>&nbsp;

                                    <button class="btn btn-success">
                                        <b>Confirmar <i class="fa fa-check"></i></b>
                                    </button>
                                </div>
                            </div>                          
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
