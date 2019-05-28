var produtoCampo = document.querySelector(".nome");
var precoCampo = document.querySelector(".preco");
var descCampo = document.querySelector(".desc");
var erros = [];
var errosForm = document.querySelector(".errosForm");
var botao = document.querySelector(".btn");

botao.addEventListener("click", function(){
    let produto = produtoCampo.value;
    let preco = precoCampo.value;
    let desc = descCampo.value;
    if(produto == ""){
        erros.push("Insira o nome do produto");
    }
    if(preco == ""){
        erros.push("Defina um preço");
    }
    if(desc == ""){
        erros.push("Descreva o produto");
    }
    errosForm.textContent = erros;
    erros = [];
})