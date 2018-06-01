<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('pessoas')) {
            Schema::create('pessoas', function(Blueprint $table) {
                $table->increments('id');
                $table->string('numero_cadastro', 25);
                $table->string('natureza_juridica', 1);
                $table->string('cpf_cnpj', 25);
                $table->string('inscricao_municipal', 25);
                $table->string('nome', 200);
                $table->string('razao_social', 200);
                $table->date('dt_nascimento');
                $table->string('endereco', 100)->nullable();
                $table->string('numero', 20)->nullable();
                $table->string('complemento', 20)->nullable();
                $table->string('bairro', 100)->nullable();
                $table->string('cidade', 100)->nullable();
                $table->string('uf', 2)->nullable();
                $table->string('cep', 15)->nullable();
                $table->string('fone1', 20)->nullable();
                $table->string('fone2', 20)->nullable();                
                $table->string('fax', 20)->nullable();
                $table->string('celular', 20)->nullable();
                $table->string('email1', 100)->nullable();
                $table->string('observacao', 200)->nullable();
                $table->integer('id_fornecedor')->nullable();
                $table->string('rg', 14)->nullable();
                $table->string('profissao', 100)->nullable();
                $table->string('apelido', 14)->nullable();
                $table->string('estado_civil', 25)->nullable();
                $table->string('email2', 100)->nullable();
                $table->string('endereco_empresarial', 100)->nullable();
                $table->string('numero_empresarial', 20)->nullable();
                $table->string('complemento_empresarial', 20)->nullable();
                $table->string('bairro_empresarial', 100)->nullable();
                $table->string('cidade_empresarial', 100)->nullable();
                $table->string('uf_empresarial', 2)->nullable();
                $table->string('cep_empresarial', 15)->nullable();
                $table->integer('codigo')->nullable();
                $table->string('abreviacao', 25)->nullable();
                $table->string('cliente_cobranca', 40)->nullable();
                $table->string('pais', 20)->nullable();
                $table->string('ramo', 30)->nullable();
                $table->string('grupo', 10)->nullable();
                $table->date('implantacao')->nullable();
                $table->string('incricao_estadual', 25)->nullable();
                $table->string('como_conheceu', 200)->nullable();
                $table->string('quem_indicou', 200)->nullable();                
                $table->string('contato', 50)->nullable();                
                $table->date('abertura')->nullable();
                $table->integer('categoria_socio')->nullable();
                $table->integer('id_socio_principal')->nullable();
                $table->string('doacao_situacao')->nullable();
                $table->date('doacao_primeira')->nullable();
                $table->date('doacao_ultimo')->nullable();
                $table->decimal('doacao_valor', 12, 2)->nullable();
                $table->decimal('doacao_quantidade', 12, 2)->nullable();
                $table->integer('id_pessoa_mesclada')->nullable();
                $table->integer('indicado_por')->nullable();
                $table->integer('login')->nullable();
                $table->integer('senha')->nullable();
                $table->integer('crm_empresa')->nullable();
                $table->string('sexo', 1)->nullable();  
                $table->string('cargo', 50)->nullable();  
                $table->string('cartao_numero', 200)->nullable();
                $table->string('cartao_cvv', 200)->nullable();
                $table->string('cartao_bandeira', 200)->nullable();
                $table->string('cartao_data_expiracao', 200)->nullable();
                $table->string('cartao_propietario', 200)->nullable();
                $table->string('recebe_informacoes', 200)->nullable();
                $table->string('divulga_nome', 200)->nullable();
                $table->string('data_email_boas_vindas', 200)->nullable();            
                $table->string('tipo_doador', 45)->default('PONTUAL');            
                $table->integer('status_doc')->nullable();
                $table->string('situacao')->default('ATIVO');
                $table->timestamps();
            });
        }        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
