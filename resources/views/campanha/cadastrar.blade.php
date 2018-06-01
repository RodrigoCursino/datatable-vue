@extends('layout.app')

@section('content')

<section class="content">
    <div class="container">
        <div class="row"><br>
            <div class="col-md-11">
                <div class="panel panel-dafault">
                    <div class="panel-heading crm-style"><b>Cadastrar novo Campanh</b></div>

                    <div class="panel-body">
                        <form action="{{ route('campanha.salvar1') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da campanha">
                                </div>

                                <div class="col-md-3">
                                    <label>Inicio</label>
                                    <input type="date" class="form-control" id="inicio" name="inicio">
                               </div>                                

                                <div class="col-md-3">
                                    <label>Fim</label>
                                    <input type="date" class="form-control" id="fim" name="fim">
                                </div>                                                               
                            </div><br>

                            <div class="row">
                                <div class="col-md-3">
                                    <label for="tag">Tag</label>
                                    <input type="text" class="form-control" id="tag" name="tag">
                                </div>
                            </div><br>                            

                            <div class="row">
                                <div class="col-md-9">
                                    <label>Descrição</label>
                                    <textarea class="form-control" id="descricao" name="descricao"></textarea>
                                </div>                                
                            </div><hr>                            

                            <div class="row">
                                <div class="col-md-3 col-md-offset-9">
                                    <a href="{{ route('campanha.listar') }}" class="btn btn-danger">
                                        <b>Cancelar <i class="fa fa-times"></i></b>
                                    </a>

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
