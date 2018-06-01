@extends('layout.app')

@section('content')

<section class="content">
    <div class="container">
        <div class="row"><br>
            <div class="col-md-12">
                <div class="panel panel-dafault">
                    <div class="panel-heading crm-style"><b>Listagem de Capanhas</b></div>
                    <div class="panel-body">
                        <div class="row">   
                            <form action="{{ route('doacoes2') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="col-md-3">
                                    <label>Tipo Doador</label>
                                    <select class="form-control" id="tipoDoador" name="tipoDoador">
                                        <option value="0">Selecione</option>
                                        @php
                                            $socio   = $filters['tipoDoador'] == 'SOCIO'   ? 'selected' : '';
                                            $pontual = $filters['tipoDoador'] == 'PONTUAL' ? 'selected' : '';
                                        @endphp
                                        <option value="SOCIO"   {{ $socio   }}>Sócio</option>
                                        <option value="PONTUAL" {{ $pontual }}>Pontual</option>
                                    </select>
                                </div>                                                

                                <div class="col-md-3">
                                    <label>Cobrança</label>
                                    <select class="form-control" id="cobranca" name="cobranca">
                                        <option value="0">Selecione</option>
                                        @php
                                            $pagSeguro = $filters['cobranca'] == '1' ? 'selected' : '';
                                            $cielo     = $filters['cobranca'] == '2' ? 'selected' : '';
                                            $paypal    = $filters['cobranca'] == '3' ? 'selected' : '';
                                        @endphp                                        
                                        <option value="1" {{ $pagSeguro }}>Pag Seguro</option>
                                        <option value="2" {{ $cielo     }}>Cielo</option>
                                        <option value="3" {{ $paypal    }}>Pay Pal</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Situação</label>
                                    <select name="situacao" id="situacao" class="form-control">
                                        <option value="TODOS">Selecione</option>                                        
                                        @php
                                            $ativo    = $filters['situacao'] == 'ATIVO'    ? 'selected' : '';
                                            $excluido = $filters['situacao'] == 'EXCLUIDO' ? 'selected' : '';
                                            $inativo  = $filters['situacao'] == 'INATIVO'  ? 'selected' : '';
                                        @endphp                                          
                                        <option value="ATIVO"    {{ $ativo    }}>ATIVO</option>        
                                        <option value="EXCLUIDO" {{ $excluido }}>EXCLUIDO</option>        
                                        <option value="INATIVO"  {{ $inativo  }}>INATIVO</option>        
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <label></label><br>
                                    <button class="btn btn-info" id="buscar">
                                        <b><i class="fa fa-search"></i> Buscar</b>
                                    </button>
                                </div>                                   
                            </form>         
                        </div><br>

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-hover table-striped table-bordered compact">
                                    <thead class="crm-style">
                                        <tr>
                                            <th>Nome | Sexo | Idade</th>
                                            <th>CPF / CNPJ</th>
                                            <th>Natureza | Tipo | Situação</th>
                                            <th>1ª | Ult Doação</th>
                                            <th>Total Doado</th>                                            
                                            <th>Qtde Doacções</th>                                            
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pessoas as $pessoa)
                                            <tr>
                                                <td>{!! $pessoa['nome']     !!}</td>
                                                <td>{!! $pessoa['cpf_cnpj'] !!}</td>
                                                <td>
                                                    {!! $pessoa['natureza'] !!} | {!! $pessoa['tipo'] !!} | {!! $pessoa['situacao']   !!}
                                                </td>
                                                <td>{!! $pessoa['datas'] !!}</td>
                                                <td>{!! $pessoa['valor'] !!}</td>
                                                <td>{!! $pessoa['qtde']  !!}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('pessoa.editar', $pessoa['id']) }}" class="btn btn-xs btn-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>                                                
                                                    <a class="btn btn-info btn-xs" data-toggle="modal" data-target="#historicoModal" onclick="getDonations({{ $pessoa['id'] }})">
                                                        <i class="fa fa-clock-o"></i>
                                                    </a>
                                                    <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#exclusaoModal" onclick="setRoute({{ $pessoa['id'] }}, 'socio')">
                                                        <i class="fa fa-trash"></i>
                                                    </a>                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>                                    
                                </table>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="historicoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Histórico de pagamentos</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table-hover table-striped table-bordered compact text-center" style="width: 100%;">
                            <thead class="crm-style">
                                <tr>
                                    <th class="text-center">Cobrança</th>
                                    <th class="text-center">Data</th>
                                    <th class="text-center">Valor Bruto</th>
                                    <th class="text-center">Valor Liquido</th>
                                    <th class="text-center">Taxa</th>                                    
                                </tr>
                            </thead>
                            <tbody id="doacoes">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <b><i class="fa fa-times"></i> Fechar</b>
                </button>
            </div>
        </div>
    </div>
</div>


@endsection
