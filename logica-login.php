<?php 
session_start();

function usuarioEstaLogado(){
    return isset($_SESSION['usuario-logado']);
}
function verificaUsuario() {
    if(!usuarioEstaLogado()){
        $_SESSION["danger"] = "você precisa estar logado para acessar esta página";
        header("location:index.php");
        die();
    }
}

function usuarioLogado() {
    return $_SESSION['usuario-logado'];
}

function buscaUsuario($conexao,$email,$senha){
    $query = "select * from usuarios where email='{$email}' and senha='{$senha}'";
    $resultado = mysqli_query($conexao,$query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

function logaUsuario($email){
    $_SESSION['usuario-logado'] = $email;
}

function logout(){
    session_destroy();
    session_start();
}

function registraUsuario($conexao,$email,$senha){
    $senhamd5= md5($senha);
    $query = "insert into usuarios (email,senha) values('{$email}','{$senhamd5}')";
    return mysqli_query($conexao,$query);
}