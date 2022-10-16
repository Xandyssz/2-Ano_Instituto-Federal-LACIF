function janelaModal($id){
	if ($id == 1) {
		/* Mensagem de Sucesso */
		$(document).ready(function(){
			$('body').append('<div id="msgInsert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header bg-success text-center"><h5 class="modal-title" id="visulUsuarioModalLabel">Informação!</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Registro cadastrado com sucesso!</div><div class="modal-footer"><button type="button" class="btn btn-outline-info" data-dismiss="modal">Fechar</button></div></div></div></div>');
			$('#msgInsert').modal({
				show: true
			});
			return false;		
		});		
	}
	if ($id == 2) {
		/* Mensagem de Alteração */
		$(document).ready(function(){
			$('body').append('<div id="msgEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header bg-success text-center"><h5 class="modal-title" id="visulUsuarioModalLabel">Informação!</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Registro alterado com sucesso!</div><div class="modal-footer"><button type="button" class="btn btn-outline-info" data-dismiss="modal">Fechar</button></div></div></div></div>');
			$('#msgEdit').modal({
				show: true
			});
			return false;		
		});
	}
	if ($id == 3) {
		/* Mensagem de Confirmação */
		$(document).ready(function(){
			$('a[data-confirm]').click(function(ev){
				var href = $(this).attr('href');
				if(!$('#confirm-delete').length){
					$('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header bg-danger text-white">Atenção!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Tem certeza de que deseja excluir o item selecionado?</div><div class="modal-footer"><button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button><a class="btn btn-danger text-white" id="dataComfirmOK">Apagar</a></div></div></div></div>');
				}
				$('#dataComfirmOK').attr('href', href);
				$('#confirm-delete').modal({
					show: true,
				});				
				return false;		
			});
		});
	}
	if ($id == 4) {
		/* Mensagem de Erro */
		$(document).ready(function(){
			$('body').append('<div id="msgErro" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header bg-success text-center"><h5 class="modal-title" id="visulUsuarioModalLabel">Informação!</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Registro alterado com sucesso!</div><div class="modal-footer"><button type="button" class="btn btn-outline-info" data-dismiss="modal">Fechar</button></div></div></div></div>');
			$('#msgErro').modal({
				show: true
			});
			return false;
		});		
	}
	if ($id == 5) {
		/* Mensagem de Delete */
		$(document).ready(function(){
			$('body').append('<div id="msgDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header bg-success text-center"><h5 class="modal-title" id="visulUsuarioModalLabel">Informação!</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Registro excluido com sucesso!</div><div class="modal-footer"><button type="button" class="btn btn-outline-info" data-dismiss="modal">Fechar</button></div></div></div></div>');
			$('#msgDelete').modal({
				show: true
			});
			return false;
		});
	}
}