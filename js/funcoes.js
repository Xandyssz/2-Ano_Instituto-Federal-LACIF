function confirmacaoExclusao() {
    var resposta = confirm("Deseja remover esse registro?");
    if (resposta == true) {
        window.location.href = "listar_funcionario.php";
    }
}

function SessaoExpirada() {
    alert("WebSite diz: \nSua Sessão foi Expirada!");
}

function loginMensagem(){
    alert('Usuario e/ou senha invalido(s)!');
    window.location.href = "login.php";
}

function OpcaoMensagens($id){
    if ($id === 1)
    {
        window.alert('Registro salvo com sucesso!');
    }

    if ($id === 2)
    {
        window.alert('Registro alterado com sucesso!');

    }

    if ($id === 3)
    {
        window.alert('Registro excluido com sucesso!');
    }


    if ($id === 4)
    {
        window.alert('Registro já cadastrado!');
    }

    if ($id === 5)
    {
        window.alert('Ocorreu um erro!');
    }

}
function confirmacaoExclusaoUsuario(id) {
    var resposta = confirm("Confirmar Exclusão do Usuario??");
    if (resposta == true) {
        window.location.href = "PainelAdminUsuarioDeletar.php?id=" + id;
    }
}

function confirmacaoExclusaoNoticia(id) {
    var resposta = confirm("Confirmar Exclusão da Noticia??");
    if (resposta == true) {
        window.location.href = "PainelAdminNoticiaDeletar.php?id=" + id;
    }
}

function confirmacaoExclusaoConvenio(id) {
    var resposta = confirm("Confirmar Exclusão do Convênio??");
    if (resposta == true) {
        window.location.href = "PainelAdminConvenioDeletar.php?id=" + id;
    }
}

function confirmacaoExclusaoConsulta(id) {
    var resposta = confirm("Confirmar Exclusão da Consulta??");
    if (resposta == true) {
        window.location.href = "PainelAdminConsultaDeletar.php?id=" + id;
    }
}

function confirmacaoExclusaoTipoExame(id){
    var resposta = confirm("Confirmar Exclusão do Tipo de Exame??");
    if(resposta == true) {
        window.location.href = "PainelAdminTipoExameDeletar.php?id=" + id;
    }
}

function confirmacaoExclusaoCarrossel(id){
    var resposta = confirm("Confirmar Exclusão do Patrocinador??");
    if(resposta == true) {
        window.location.href = "PainelAdminPatrocinadorDeletar.php?id=" + id;
    }
}