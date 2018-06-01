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
                            <div class="col-md-2 col-offset-1">
                                <a href="{{route('campanha.cadastrar')}}" class="btn btn-success">
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
                                            <th>Inicio</th>
                                            <th>Fim</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($campanhas as $campanha)
                                        <tr>
                                            <td>{{ $campanha->id }}</td>
                                            <td>{{ $campanha->nome }}</td>
                                            <td>{{ $campanha->inicio }}</td>
                                            <td>{{ $campanha->fim }}</td>
                                            <td>
                                                <a href="{{ route('campanha.editar', $campanha->id) }}" class="btn btn-xs btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>                                                
                                                <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#exclusaoModal" onclick="setRoute({{ $campanha->id }}, 'campanha')">
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
