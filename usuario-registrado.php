<?php include("logica-login.php");
    include("conexao.php");
    $senha = $_POST['senha'];
    $confsenha = $_POST['confsenha'];
    $email = $_POST['email'];

    if($senha == $confsenha){
        registraUsuario($conexao,$email,$senha);
        $_SESSION['success'] = "usuario $email registrado com sucesso!";
        header("location: index.php");
    } else {
        $_SESSION['danger'] = "as senhas não estão iguais";
        header("location: form-usuario.php");
    }
    // teste