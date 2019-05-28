<?php include("cabecalho.php");
    include("logica-login.php");

verificaUsuario();
?>
    <form enctype="multipart/form-data" action="registrado.php" class="form" method="post" id="produto">
    <p class="text-danger errosForm"></p>
        <table class="table my-5">
            <tr>
                <td>
                    <label for="input-produto">Nome do produto:</label>
                </td>
                <td>
                    <input type="text" name="produto" placeholder="Digite" id="input-produto" class="form-control nome" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="input-preco">Preço:</label>
                </td>
                <td>
                    <input type="number" name="preco" placeholder="Digite" class="form-control preco" id="input-preco" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="input-desc">Descrição do produto:</label>
                </td>
                <td>
                    <input type="text" name="desc" class="form-control desc" id="input-desc" placeholder="Digite" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="input-usado">Usado</label>
                    <input type="checkbox" name="usado" value="false" id="input-usado">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="input-imagem">Anexar fotos</label>
                </td>
                <td>
                    <input type="file" name="imagem" id="input-imagem">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" class="btn btn-primary" value="Registrar" name="submit">
                </td>
            </tr>
        </table>
    </form>
    <script src="js/form-produto.js"></script>