@extends('layout.app')

@section('content')

<section class="content">
    <div class="container">
        <div class="row"><br>
            <div class="col-md-11">
                <div class="panel panel-dafault">
                    <div class="panel-heading crm-style"><b>Cadastrar Sócio</b></div>

                    <div class="panel-body">
                        <form action="{{ route('socio.salvar1') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Pessoa</label>
                                    <select name="id_pessoa" id="id_pessoa" class="form-control">
                                        <option value="">Selecione</option>
                                        @foreach($pessoas as $pessoa)
                                            <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label>Tipo</label>
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option value="">Selecione</option>
                                        <option value="MENSAL">MENSAL</option>
                                        <option value="ANUAL">ANUAL</option>
                                        <option value="PONTUAL">PONTUAL</option>
                                        <option value="TRIMESTRAL">TRIMESTRAL</option>
                                    </select>
                               </div>                                

                                <div class="col-md-3">
                                    <label>Adesão</label>
                                    <input type="date" class="form-control" id="adesao" name="adesao">
                                </div>                                                               
                            </div><br>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="tag">Tipo de Pagamento</label>
                                    <select class="form-control" id="id_tipo_pagamento" name="id_tipo_pagamento">
                                        <option value="">Selecione</option>
                                        @foreach($tipos_pagamentos as $tipo_pagamento)
                                            <option value="{{ $tipo_pagamento->id }}">{{ $tipo_pagamento->descricao }}</option>
                                        @endforeach                                        
                                    </select>
                                </div>
                            </div><hr>                            

                            <div class="row">
                                <div class="col-md-3 col-md-offset-9">
                                    <a href="{{ route('socio.listar') }}" class="btn btn-danger">
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
