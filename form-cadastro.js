var emailCampo = document.querySelector(".email");
var senhaCampo = document.querySelector(".senha");
var confsenhaCampo = document.querySelector(".confsenha");
var botao = document.querySelector("button");
var paragrafo = document.querySelector(".errosForm");
var erros = [];

botao.addEventListener("click", function(){
    let email = emailCampo.value;
    let senha = senhaCampo.value;
    let confsenha = confsenhaCampo.value;
    if(email == ""){
        erros.push("Preencha o email");
    }
    if(senha == ""){
        erros.push("Preencha a senha");
    }
    if(confsenha == ""){
        erros.push("Confirme a senha");
    }
    paragrafo.textContent = erros;
    erros = []; 
})


