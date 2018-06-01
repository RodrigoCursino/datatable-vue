<template>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Cadastro</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
            <div class="box-body">
                <!-- id -->
                <form-group :form="doador" field="id">
                    <input v-model="doador.id"
                           type="hidden"
                           class="form-control"
                           id="id"
                    >
                </form-group>
                <!--nome-->
                <form-group :form="doador" field="nome">
                    <label for="nome">Nome</label>
                    <input v-model="doador.nome"
                           type="text"
                           class="form-control"
                           id="nome"
                           placeholder="Campo Obrigatório"
                    >
                </form-group>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- cpf -->
                        <form-group :form="doador" field="cpf">
                            <label for="cpf">CPF</label>
                            <input v-model="doador.cpf"
                                   type="text"
                                   class="form-control"
                                   id="cpf"
                                   placeholder="Campo Obrigatório"
                            >
                        </form-group>
                    </div>
                    <div class="col-lg-6">
                        <!-- data nascimento -->
                        <form-group :form="doador" field="dt_nascimento">
                            <label >Data de Nascimento</label>
                            <input v-model="doador.dt_nascimento"
                                   type="date"
                                   class="form-control"
                                   id="dt_nascimento"
                                   placeholder="Campo Obrigatório"
                            >
                        </form-group>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- apelido -->
                        <form-group :form="doador" field="apelido">
                            <label for="apelido">Apelido</label>
                            <input v-model="doador.apelido"
                                   type="text"
                                   class="form-control"
                                   id="apelido"
                                   placeholder="Campo Obrigatório"
                            >
                        </form-group>
                    </div>
                    <div class="col-lg-6">
                        <!-- profissao -->
                        <form-group :form="doador" field="profissao">
                            <label for="profissao">Profissão</label>
                            <input v-model="doador.profissao"
                                   type="text"
                                   class="form-control"
                                   id="profissao"
                                   placeholder="Campo Obrigatório"
                            >
                        </form-group>
                    </div>
                </div>
                <!--email-->
                <form-group :form="doador" field="email">
                    <label for="email">Email</label>
                    <input v-model="doador.email"
                           type="email"
                           class="form-control"
                           id="email"
                           placeholder="Digite seu Email"
                    >
                </form-group>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</template>
<script>
    import * as Form from '../../vue/form';

    export default {
        name: 'doador-cadastro',
        components: {},
        props: {},
        computed: {},
        data() {
          return {
             doador: {}
          }
        },
        created() {
          this.doador = this.buildForm(this.doador);
        },
        methods: {
            buildForm (doador) {
                const data = {
                    id            : doador ? doador.id              : null,
                    nome          : doador ? doador.nome            : null,
                    cpf           : doador ? doador.cpf             : null,
                    dt_nascimento : doador ? doador.dt_nascimento   : null,
                    profissao     : doador ? doador.profissao       : null,
                    apelido       : doador ? doador.apelido         : null,
                    email         : doador ? doador.email           : null
                };
                return new SlcForm(data);
            },
        }
    }
</script>
<style scoped>

</style>