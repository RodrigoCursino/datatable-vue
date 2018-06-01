@extends('layout.app')

@section('content')

<section class="content">
    <div class="container">
        <div class="row"><br>
            <div class="col-md-11">
                <div class="panel panel-dafault">
                    <div class="panel-heading crm-style"><b>Listagem de Pessoas</b></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2 col-offset-1">
                                <a href="{{route('pessoa.cadastrar')}}" class="btn btn-success">
                                    <b>Adicionar <i class="fa fa-plus"></i></b>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-hover table-striped table-bordered table-compact">
                                    <thead class="crm-style">
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>Cpf</th>
                                            <th>Fone 1</th>
                                            <th>Fone 2</th>
                                            <th>Celular</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pessoas as $pessoa)
                                        <tr>
                                            <td>{{ $pessoa->id }}      </td>
                                            <td>{{ $pessoa->nome }}    </td>
                                            <td>{{ $pessoa->cpf_cnpj }}</td>
                                            <td>{{ $pessoa->fone1 }}   </td>
                                            <td>{{ $pessoa->fone2 }}   </td>
                                            <td>{{ $pessoa->celular }} </td>
                                            <td>
                                                <a href="{{ route('pessoa.editar', $pessoa->id) }}" class="btn btn-xs btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>                                                
                                                <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#exclusaoModal" onclick="setRoute({{ $pessoa->id }}, 'pessoa')">
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


@endsection
