var email = document.querySelector(".email");
var senha = document.querySelector(".senha");
var btnSubmit = document.querySelector(".btn-login");
var errosForm = document.querySelector(".errosForm");
var erros = [];
btnSubmit.addEventListener("click",function(){
    
    var em = email.value;
    var se = senha.value;
    if(em == ""){
        erros.push("Preencha o email");
    }
    if(se == ""){
        erros.push("preencha a senha");
    }
        errosForm.textContent = erros;
        erros = [];
})

