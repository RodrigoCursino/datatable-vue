$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-red',
        radioClass: 'iradio_square-red',
        increaseArea: '20%' /* optional */
    });
});

function setRoute(id, tabela)
{
	var url = '/' + tabela + '/' + tabela;
	$('#deleteForm').attr('action', url);
}