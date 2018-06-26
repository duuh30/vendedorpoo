<?php
	require_once 'classes/frutas.php';
	require_once 'classes/conexao.php';
	require_once 'classes/crud_frutas.php';
	require_once 'classes/crudTipo.php';
	require_once 'classes/tipos.php';
	require_once 'classes/medidas.php';
	require_once 'classes/crud_medidas.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title>Gerenciamento e Cadastro de Frutas</title>
</head>
<body>
	 <?php
	 	$fruta = new Frutas();
	 	$tipo = new tipos();
	 	$medida = new Medidas();

	 	// Cadastro de Frutas

	 	if (isset($_POST['btCadFruta'])){
	 		$nome = $_POST['nome'];
	 		$preco = $_POST['preco'];
	 		$quantidade = $_POST['quantidade'];
	 		$tipo_fruta_id = $_POST['tipo_fruta_id'];

	 		$fruta->setNome($nome);
	 		$fruta->setQuantidade($quantidade);
	 		$fruta->setPreco($preco);
	 		$fruta->setTipo_Fruta_id($tipo_fruta_id);
			$fruta->inserirFruta();
			unset($_POST);

	 	}

	 	// Excluir Frutas
	 	 if (isset($_POST['excluirFruta'])){
	 		$id = $_POST['id_fruta'];

	 		$fruta->deletarFruta($id);
	 	} 


	 	// Cadastando Tipo

	 	if(isset($_POST['cadTipo'])){
	 		$descricao = $_POST['descricao'];
	 		$unidade_medida = $_POST['medida'];

	 		$tipo->setDescricao($descricao);
	 		$tipo->setUnidade_Medida($unidade_medida);

	 		$tipo->inserirTipo();
	 		unset($_POST);
	 	}

	 	// Cadastrar Medidas

	 	if(isset($_POST['CadMedida'])){
	 		$sigla=$_POST['sigla'];
	 		$descricaoMedida=$_POST['desc'];

	 		$medida->setSigla($sigla);
	 		$medida->setDescricao($descricaoMedida);

	 		$medida->inserirMedida();
	 		unset($_POST);
	 	}

	 ?>
	 <div style=" margin: 150px 0; text-align: center">
	 		<h3> Cadastrar Frutas </h3>
			<form method="POST">
				<p> <label> Nome </label> <input type="text" name="nome" placeholder="Digite o nome da fruta"> </p>
				<p> <label> Preço </label> <input type="text" name="preco" placeholder="Digite o valor da fruta"> </p>
				<p> <label> Quantidade </label> <input type="text" name="quantidade" placeholder="Digite a quantidade"> </p>
				<p> <label> Tipo da Fruta </label> <select name="tipo_fruta_id">
					<?php foreach ($tipo->pesquisarTudo() as $linha => $valor) { ?>
						<?php echo "<option>".$valor->id."</option>"; ?>
						<?php } ?>
				</select> </p>
				<input type="submit" name="btCadFruta" value="Cadastrar Fruta">

				
			</form>	 
			<h3> Cadastrar Tipos </h3>

			<form method="POST">
				<p><label>Descrição</label> <input type="text" name="descricao" placeholder="Digite a Descrição"> </p>
				 	<p> <label> Unidade de Medida</label> <select name="medida">
					<?php foreach ($medida->pesquisarTudo() as $linha => $valor) { ?>
						<?php echo "<option>".$valor->id."</option>"; ?>
						<?php } ?>
				</select> </p>
				<p> <input type="submit" name="cadTipo" value="Cadastrar Medida"> </p>
			</form>

			<h3> Cadastrar Unidades de Medida </h3>
			<form method="POST">
				<p> <label> Sigla </label> <input type="text" name="sigla" placeholder="Digite a sigla"> </p>
				<p> <label> Descrição </label> <input type="text" name="desc" placeholder="Digite a descrição"></p>
				<p> <input type="submit" name="CadMedida"  value="Cadastrar Medidas"> </p>
			</form>

			<table border="2">
				<tr>
					<td>Código </td>
					<td>Nome</td>
					<td> Preço</td>
					<td>Quantidade</td>
					<td>Tipo</td>
					<td> Ação </td>
				</tr>
					<?php foreach ($fruta->pesquisarTudo() as $linha => $valor) { ?>
				<tr>
					<td> <?php echo $valor->id; ?> </td>
					<td>  <?php echo $valor->nome;   ?> </td>
					<td> <?php echo $valor->preco;   ?> </td>
					<td> <?php echo $valor->qtd;   ?> </td>
					<td> <?php echo $valor->tipo_fruta_id;   ?></td>

					<td> <button type="button"> Editar</button>
						<form method="POST">
						<input type="hidden" name="id_fruta" value= <?php echo $valor->id; ?> >
						<button name="excluirFruta" type="submit"> Excluir </button>
					</form>
					</td>

				</tr>
			<?php } ?>
			</table>	
	 </div>
</body>
</html>