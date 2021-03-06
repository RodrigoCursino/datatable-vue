@extends('layout.app')

@section('content')

<section class="content">
    <div class="container">
        <div class="row"><br>
            <div class="col-md-11">
                <div class="panel panel-dafault">
                    <div class="panel-heading crm-style"><b>Cadastrar novo Banco</b></div>

                    <div class="panel-body">
                        <form action="{{ route('banco.salvar1') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Banco">
                                </div>

                                <div class="col-md-4">
                                    <label>Numero</label>
                                    <input type="text" class="form-control" id="numero" name="numero" placeholder="Numero do banco">
                                </div>                                
                            </div><hr>                            

                            <div class="row">
                                <div class="col-md-3 col-md-offset-9">
                                    <a href="{{ route('banco.listar') }}" class="btn btn-danger">
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
