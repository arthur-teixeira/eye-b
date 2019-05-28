<?php 
    function adicionaProduto($conexao,$produto,$preco,$desc,$usado){
        $query = "insert into produto(nome,preco,descr,usado) values('{$produto}',{$preco},'{$desc}',$usado)";
        return mysqli_query($conexao,$query);
    }
    function listaProdutos($conexao){
        $produtos= array();
        $query = "select * from produto";
        $resultado = mysqli_query($conexao,$query);
        while($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos,$produto);
        }
        return $produtos;
    }

    function removeProduto($conexao,$id){
        $query = "delete from produto where id={$id}";
        return $query;
        #return mysqli_($conexao,$query);
    }

    function buscaProduto($conexao, $id){
        $query = "select * from produto where id={$id}";
        return mysqli_fetch_assoc($conexao,$query);
    }

    function alteraProduto($conexao, $id, $nome, $preco, $desc, $usado){
        $query = "update produto set nome='{$nome}',preco={$preco}, descr='{$desc}',usado={$usado}
        where id={$id}";
        return mysqli_query($conexao,$query);
    }