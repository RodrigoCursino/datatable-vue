@extends('layout.app')

@section('content')

<section class="content">
    <div class="container">
        <div class="row"><br>
            <div class="col-md-11">
                <div class="panel panel-dafault">
                    <div class="panel-heading crm-style"><b>Cadastrar nova Pessoa</b></div>

                    <div class="panel-body">
                        <form action="{{ route('campanha.salvar1') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-7">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da Pessoa">
                                </div>                                                               

                                <div class="col-md-3">
                                    <label>Numero cadastro</label>
                                    <input type="text" class="form-control" id="numero_cadastro" name="numero_cadastro" placeholder="Numero">
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-7">
                                    <label>Razão Social</label>
                                    <input type="text" class="form-control" id="razao_social" name="razao_social">
                                </div>

                                <div class="col-md-3">
                                    <label>Natureza Juridica</label>
                                    <select class="form-control" id="natureza_juridica" name="natureza_juridica">
                                        <option value="">Selecione</option>
                                        <option value="F">Fisica</option>
                                        <option value="J">Juridica</option>
                                    </select>
                                </div>
                            </div><br>                            

                            <div class="row">
                                <div class="col-md-4">
                                    <label>CPF / CNPJ</label>
                                    <input type="number" class="form-control" id="cpf_cnpj" name="cpf_cnpj">
                                </div>

                                <div class="col-md-3">
                                    <label for="tag">Inscrição Municipal</label>
                                    <input type="text" class="form-control" id="inscricao_municipal" name="inscricao_municipal">
                                </div>

                                <div class="col-md-3">
                                    <label>Data de Nascimento</label>
                                    <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento" >
                                </div>                                
                            </div><br>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Profissão</label>
                                    <input type="text" class="form-control" name="profissao" id="profissao">
                                </div>

                                <div class="col-md-3">
                                    <label for="">Sexo</label>
                                    <select type="text" class="form-control">
                                        <option value="">Selecione</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label for="">RG</label>
                                    <input type="numero" class="form-control" id="rg" name="rg">
                                </div>
                            </div><br>
    
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Apelido</label>
                                    <input type="text" class="form-control" name="apelido" id="apelido">
                                </div>
                            </div><hr>

                            <div class="row">
                                <div class="col-md-3">
                                    <label>CEP</label>
                                    <input type="text" class="form-control" id="cep" name="cep" >
                                </div>                                                                
                            </div><br>

                            <div class="row">
                                <div class="col-md-3">
                                    <label>Endereço</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco" >
                                </div>

                                <div class="col-md-2">
                                    <label>Numero</label>
                                    <input type="text" class="form-control" id="numero" name="numero" >
                                </div>

                                <div class="col-md-2">
                                    <label>Complemento</label>
                                    <input type="text" class="form-control" id="complemento" name="complemento" >
                                </div> 

                                <div class="col-md-3">
                                    <label>UF</label>
                                    <select class="form-control" id="uf" name="uf" >
                                        <option value="">Selecione</option>
                                    </select>
                                </div>                                 
                            </div><br>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Bairro</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro">
                                </div>

                                <div class="col-md-4 col-md-offset-1">
                                    <label for="">Cidade</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro">
                                </div>                                
                            </div><hr>

                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Fone 1</label>
                                    <input type="text" class="form-control" id="fone1" name="fone1">
                                </div>

                                <div class="col-md-3">
                                    <label for="">Fone 2</label>
                                    <input type="text" class="form-control" id="fone2" name="fone2">
                                </div>

                                <div class="col-md-3">
                                    <label for="">Fax</label>
                                    <input type="text" class="form-control" id="fax" name="fax">
                                </div>

                                <div class="col-md-3">
                                    <label for="">Celular</label>
                                    <input type="text" class="form-control" id="celular" name="celular">
                                </div>                                                                 
                            </div><br> 

                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">E-mail 1</label>
                                    <input type="email" class="form-control" id="email1" name="email1">
                                </div>                                  

                                <div class="col-md-5 col-md-offset-1">
                                    <label for="">E-mail 2</label>
                                    <input type="email" class="form-control" id="email2" name="email2">
                                </div>                                                                  
                            </div><br>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Observação</label>
                                    <textarea class="form-control" id="observacao" name="observacao"></textarea>
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
