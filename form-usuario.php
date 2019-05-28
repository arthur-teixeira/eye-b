<?php include("cabecalho.php");
    include("conexao.php");
    include("logica-login.php");
?>
<form action="usuario-registrado.php" method="post">
<p class="text-danger errosForm"></p>
    <table class="table my-5">
        <tr>
            <td>
                <label for="input-email">Email:</label>
            </td>
            <td>
                <input type="email" class="form-control email" id="input-email" placeholder="Email" name="email" required>
            </td>
        </tr>        
        <tr>
            <td>
                <label for="input-senha">Senha:</label>
            </td>
            <td>
                <input type="password" class="form-control senha" id="input-senha" placeholder="Senha" name="senha" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="input-confsenha">Confirmar senha:</label>
            </td>
            <td>
                <input type="password" class="form-control confsenha" id="input-confsenha" placeholder="Confirmar senha" name="confsenha" required>
            </td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary btn-lg">Registrar</button>
            </td>
        </tr>
    </table>
</form>
<p class="lead" id="senha_tipo"></p>
<div class="progress">
    <div class="progress-bar medidor" role="progressbar" >
    </div>
</div>

<script src="js/form-cadastro.js"></script>
<script src="js/senha.js"></script>
<?php include("rodape.php")?>