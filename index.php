<?php include("cabecalho.php");
	  include("logica-login.php");
	  include("logica-produto.php");
	  include("conexao.php") ?>
<div class="container">
<div class="container" align="center">
	<?php 
	if(usuarioEstaLogado()){?>
		<p class="text-success"> Você está logado como <?= usuarioLogado()?></p>
		<a class="btn btn-primary" href="logout.php">Logout</a>
		<table class="table table-striped table-bordered my-3">
			<thead>
				<tr>
				<td>Nome</td>
				<td>preço</td>
				<td>descrição</td>	
				</tr>
			</thead>
			<?php
			$produtos = listaProdutos($conexao);
			foreach($produtos as $produto) : ?>
			<tr>
				<td><?=$produto['nome']?></td>
				<td><?=$produto['preco']?></td>
				<td><?= substr($produto['descr'], 0,40)?> </td>
				<td><form action="remove-produto.php" method="post">
					<input type="hidden" name="id" value="<?=$produto['id']?>">
					<input type="submit" class="btn btn-danger" value="Remover">
				</form>
				</td>
			</tr>
		<?php 
			endforeach
		?>
	</table>		
		 <?php 
		} else { 
		?> 
</div>
<div class="div-main py-5">
	<div class="painel-login">
		<form action="login.php" method="post">
			<input type="email" placeholder="Email" class="input-login email" name="email" required>
			<input type="password" placeholder="Senha" class="input-login senha" name="senha" required>
			<button type="submit" class="btn-login">Log in</button>
			<a href="form-usuario.php" class="text-muted h6">Registrar</a>
		</form>
		<p class="h6 text-danger errosForm"></p>
	</div>
</div>
<script src="js/form-index.js"></script>
<?php }
require_once("rodape.php");
?>




