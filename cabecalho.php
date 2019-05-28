<?php 
error_reporting(E_ALL ^ E_NOTICE);
require_once("alerta.php")?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"> 
        <meta lang="pt-br">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css">
        <title>Eye &bull; b</title>
        <link rel="icon" href="img/favicon.png">
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container"> 
            
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">
                        <center>
                            <img src="img/logo.png" alt="logo da marca" class="sml">
                        </center>
                    </a>
                </div>
                <div align="center" class="container my-3">
                    <ul class="nav navbar-nav d-table">
                        <li class="links mx-3"><a href="index.php">Página Inicial</a></li>
                        <li class="links mx-3"><a href="form-produto.php ">Criar anúncio</a></li>
                        <li class="links mx-3"><a href="contato.php">Fale Conosco</a></li>
                    </ul>
                </div> 
            </div>
        </div>

<div class="container py-3" align="center">
<?php mostraAlerta("success");
      mostraAlerta("danger");
?>

