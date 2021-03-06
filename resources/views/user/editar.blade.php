@extends('layout.app')

@section('content')

<section class="content">
    <div class="container">
        <div class="row"><br>
            <div class="col-md-11">
                <div class="panel panel-dafault">
                    <div class="panel-heading crm-style"><b>Edição de Usuario</b></div>

                    <div class="panel-body">
                        <form action="{{ route('user.salvar2', ['id' => $user->id]) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="row">
                                <div class="col-md-4">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Usuario" value="{{ $user->name }}">
                                </div>

                                <div class="col-md-4">
                                    <label>Senha</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Digite a senha do usuario" value="{{ $user->password }}">
                                    <input type="hidden" id="passwordOld" name="passwordOld" value="{{ $user->password }}">
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-8">
                                    <label>E-mail</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="usuario@email.com.br" value="{{ $user->email }}">
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
