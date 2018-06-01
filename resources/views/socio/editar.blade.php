@extends('layout.app')

@section('content')

<section class="content">
    <div class="container">
        <div class="row"><br>
            <div class="col-md-11">
                <div class="panel panel-dafault">
                    <div class="panel-heading crm-style"><b>Cadastrar nova campanha</b></div>

                    <div class="panel-body">
                        <form action="{{ route('socio.salvar2', ['id' => $socio->id]) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="row">
                                <div class="col-md-4">
                                    <label>Pessoa</label>
                                    <select name="id_pessoa" id="id_pessoa" class="form-control">
                                        <option value="">Selecione</option>
                                        @foreach($pessoas as $pessoa)
                                            @php 
                                                $selected = $pessoa->id == $socio->id_pessoa ? 'selected' : '';
                                            @endphp
                                            <option value="{{ $pessoa->id }}" {{ $selected }} >{{ $pessoa->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label>Tipo</label>
                                    <select name="tipo" id="tipo" class="form-control">
                                        @php
                                            $sMensal     = $socio->tipo == 'MENSAL'     ? 'selected' : '';
                                            $sAnual      = $socio->tipo == 'ANUAL'      ? 'selected' : '';
                                            $sPontual    = $socio->tipo == 'PONTUAL'    ? 'selected' : '';
                                            $sTrimestral = $socio->tipo == 'TRIMESTRAL' ? 'selected' : '';
                                        @endphp
                                        <option value="">Selecione</option>
                                        <option value="MENSAL" {{ $sMensal}}>MENSAL</option>
                                        <option value="ANUAL" {{ $sAnual}}>ANUAL</option>
                                        <option value="PONTUAL" {{ $sPontual}}>PONTUAL</option>
                                        <option value="TRIMESTRAL" {{ $sTrimestral}}>TRIMESTRAL</option>
                                    </select>
                               </div>                                

                                <div class="col-md-3">
                                    <label>Adesão</label>
                                    <input type="date" class="form-control" id="adesao" name="adesao" value="{{ $socio->adesao }}">
                                </div>                                                               
                            </div><br>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="tag">Tipo de Pagamento</label>
                                    <select class="form-control" id="id_tipo_pagamento" name="id_tipo_pagamento">
                                        <option value="">Selecione</option>
                                        @foreach($tipos_pagamentos as $tipo_pagamento)
                                            @php 
                                                $selected = $tipo_pagamento->id == $socio->id_tipo_pagamento ? 'selected' : '';
                                            @endphp

                                            <option value="{{ $tipo_pagamento->id }}" {{ $selected }}>{{ $tipo_pagamento->descricao }}</option>
                                        @endforeach                                        
                                    </select>
                                </div>
                            </div><hr>                          

                            <div class="row">
                                <div class="col-md-3 col-md-offset-9">
                                    <a href="{{ route('socio.listar') }}" class="btn btn-danger">
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
