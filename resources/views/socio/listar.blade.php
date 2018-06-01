@extends('layout.app')

@section('content')

<section class="content">
    <div class="container">
        <div class="row"><br>
            <div class="col-md-11">
                <div class="panel panel-dafault">
                    <div class="panel-heading crm-style"><b>Listagem de Capanhas</b></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-hover table-striped table-bordered table-compact">
                                    <thead class="crm-style">
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>CPF / CNPJ</th>
                                            <th>Natureza</th>
                                            <th>Tipo</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($socios as $socio)
                                            @php
                                                if (!empty($socio->socio) && $socio->situacao <> 'EXCLUIDO') {
                                                    $tipo = '<span class="label label-success">Sócio</span>';
                                                } else {
                                                    $tipo = '<span class="label label-info">Pontual</span>';
                                                }
                                            @endphp
                                            <tr>
                                                <td class="text-center">{{ $socio->id       }}</td>
                                                <td class="text-center">{{ $socio->nome     }}</td>
                                                <td class="text-center">{{ $socio->cpf_cnpj }}</td>
                                                <td class="text-center">{{ $socio->natureza_juridica }}</td>
                                                <td class="text-center">{!! $tipo; !!}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('socio.editar', $socio->id) }}" class="btn btn-xs btn-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>                                                
                                                    <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#exclusaoModal" onclick="setRoute({{ $socio->id }}, 'socio')">
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
