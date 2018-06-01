<div class="modal fade" tabindex="-1" role="dialog" id="exclusaoModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Exclusão de Registro</h4>
            </div>
            <div class="modal-body">
                <p>Tem certeza de que deseja excluir este registro?</p>
            </div>
            <div class="modal-footer">
                <form action="" method="POST" id="deleteForm">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <a class="btn btn-danger" data-dismiss="modal">
                        <b>Cancelar <i class="fa fa-times"></i></b>
                    </a>

                    <button class="btn btn-warning">
                        <b>Confirmar <i class="fa fa-check"></i></b>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>