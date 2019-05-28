<?php include("cabecalho.php");
    include("conexao.php");
    include("logica-produto.php");
    $produto = $_POST['produto'];
    $preco= $_POST['preco'];
    $desc = $_POST['desc'];
    
    if(array_key_exists('usado', $_POST)) {
        $usado = "true";
    } else {
        $usado = "false";
    }
    

    if(adicionaProduto($conexao,$produto,$preco,$desc,$usado)){
?> <p class="text-success"> O produto <?=$produto?> foi adicionado com sucesso!</p>
    <?php } else { 

    $msg = mysqli_error($conexao);
    
    ?> <p class="text-danger">O produto não foi adicionado: <?=$msg?></p>
<?php
} 
?>





<?php include("rodape.php")?>