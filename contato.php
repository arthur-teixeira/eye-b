<?php include("cabecalho.php");
        include("logica-login.php");
        verificaUsuario() ?>
<h1 style="color:blue;">Contato</h1>

<form action="envia-contato.php" method="post">
    <table class="table">
    <tr>
        <td>
            <label for="input-nome">Nome:</label>
        </td>
        <td>
            <input type="text" name="nome" placeholder="Nome" id="input-nome" class="form-control">
        </td>
    </tr>
    <tr>
        <td>
            <label for="input-email">Email:</label>
        </td>
        <td>
            <input type="email" name="nome" placeholder="email" id="input-email" class="form-control">
        </td>
    </tr>
    <tr>
        <td>
            <label for="input-msg">Mensagem:</label>
        </td>
        <td>
            <textarea name="mensagem" id="input-msg" class="form-control"></textarea>
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" class="btn btn-primary" value="Enviar">
        </td>
    </tr>


    </table>
</form>








<?php include("rodape.php")?>




