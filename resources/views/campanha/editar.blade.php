@extends('layout.app')

@section('content')

<section class="content">
    <div class="container">
        <div class="row"><br>
            <div class="col-md-11">
                <div class="panel panel-dafault">
                    <div class="panel-heading crm-style"><b>Cadastrar nova campanha</b></div>

                    <div class="panel-body">
                        <form action="{{ route('campanha.salvar2', ['id' => $campanha->id]) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da campanha" value="{{ $campanha->nome }}">
                                </div>

                                <div class="col-md-3">
                                    <label>Inicio</label>
                                    <input type="date" class="form-control" id="inicio" name="inicio" value="{{ $campanha->inicio }}">
                               </div>                                

                                <div class="col-md-3">
                                    <label>Fim</label>
                                    <input type="date" class="form-control" id="fim" name="fim" value="{{ $campanha->fim }}">
                                </div>                                                               
                            </div><br>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="tag">Tag</label>
                                    <input type="text" class="form-control" id="tag" name="tag" value="{{ $campanha->tag }}">
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-8">
                                    <label>Descrição</label>
                                    <textarea class="form-control" id="descricao" name="descricao">{{ $campanha->descricao }}</textarea>
                                </div>                                
                            </div><hr>                           

                            <div class="row">
                                <div class="col-md-3 col-md-offset-9">
                                    <a href="{{ route('campanha.listar') }}" class="btn btn-danger">
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
