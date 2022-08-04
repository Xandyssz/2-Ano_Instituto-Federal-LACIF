function confirmacaoExclusao() {
	var resposta = confirm("Deseja remover esse registro?");
    if (resposta == true) {
		window.location.href = "listar_funcionario.php";
    }
}
function SessaoExpirada(){
  alert("WebSite diz: \nSua sessão foi expirada!");
}

function loginMensagem(){
    alert(' Usuario e/ou senha invalido(s)!');
    window.location.href = "login.php";

}