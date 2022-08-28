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
    var resposta = confirm("Confima Exclusão Usuario??");
    if (resposta == true) {
      //window.location.href = path+"/contact-us.php/CrudUsuarioDeletar.php?id="+id

        window.location.href = "./CrudUsuarioDeletar.php?id=" + id;
    }
}

function confirmacaoExclusaoConsulta(idconsulta) {
    var resposta = confirm("Confima Exclusão Usuario??");
    if (resposta == true) {
        //window.location.href = path+"/contact-us.php/CrudUsuarioDeletar.php?id="+id

        window.location.href = "./CrudConsultaDeletar.php?id=" + idconsulta;
    }
}