<?php include("conexao.php");
      include("logica-login.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaMd5 = md5($senha);
    $usuario = buscaUsuario($conexao,$email,$senhaMd5);
    
if ($usuario == null){
    $_SESSION['danger'] = "Usuário e/ou senha iválidos";
    header("location: index.php");
    
} else {
    $_SESSION['success'] = "Logado com sucesso";
    logaUsuario($usuario['email']);
    header("location: index.php");
}
die();
