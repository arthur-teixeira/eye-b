<?php require_once("cabecalho.php"); 		
 require_once("logica-produto.php"); 
 require_once("logica-login.php");

 $id = $_POST['id'];
 removeProduto($conexao, $id);
 $_SESSION["success"] = "Produto removido com sucesso.";
 header("Location: index.php");
 die();
 ?>
 