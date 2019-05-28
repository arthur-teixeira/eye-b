<?php include("logica-login.php");

logout();
$_SESSION['success'] = "Deslogado com sucesso.";
header("location:index.php");