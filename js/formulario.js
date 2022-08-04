var nome = document.querySelector("#nome");
var email = document.querySelector("#email");
var erro = document.querySelector("#erro");
var campo = document.querySelector("#campo-erro");

var formulario = document.querySelector("form");
formulario.onsubmit = function () {
    erro.classList.add('d-none');
    nome.classList.remove("is-invalid");
    email.classList.remove("is-invalid");

    if (nome.value == "") {
        nome.classList.add("is-invalid"); //adiciona uma classe
        alert('Informe o nome'); // exibe o alerta
        erro.classList.remove('d-none');
        campo.textContent = "Nome";
        nome.focus(); //retorna o focus para o componente
        return false; // interrompe a execução do envio do formulário
    } 
    if (email.value == "") {
        email.classList.add("is-invalid"); //adiciona uma classe
        alert('Informe o e-mail'); // exibe o alerta
        erro.classList.remove('d-none');
        campo.textContent = "E-mail";
        email.focus(); //retorna o focus para o componente
        return false; // interrompe a execução do envio do formulário
    }
    return true;
};