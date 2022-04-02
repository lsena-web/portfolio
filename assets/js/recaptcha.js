function validarPost() {
    if (grecaptcha.getResponse() != "") return true;

    // ERRO: não selecionado
    alert('Selecione a caixa de não sou um robô');
    return false;
}