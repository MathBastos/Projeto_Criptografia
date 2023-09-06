

function cript(formData){

    let obj = {};
    formData.forEach((valor, chave) => obj[chave] = valor);
    let dados = JSON.stringify(obj);

    console.log(dados);

    // criptografia

    let criptografia = "mensagem criptografada";

    let mensagem = new FormData();
    mensagem.append("mensagem", criptografia);
    return mensagem;

}