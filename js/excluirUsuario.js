function confirmacaoExclusaFuncionario() {
    var resposta = confirm("Deseja remover esse registro?");
    if (resposta == true) {
        window.location.href = "listar_funcionario.php";
    }
}