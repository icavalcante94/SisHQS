<!DOCTYPE html>
<html lang="pt-br">
 <!-- Cabeçalho -->
 <head>
 	<meta charset="UTF-8"/>
    <title>SisHQs - Cadastro</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
 </head>
 <!-- Corpo do programa -->
 <body>
 <center>
 <?php
	include ('banner.inc');
  ?>
  <!-- pesquisa no BD -->
<?php
	$pesquisa = $_POST['pesquisa']; // $variável = $_método['nome_componente_formulário'];
	//$livro = $_POST['pesq1'];
	//$autor = $_POST['pesq2'];
	//$editora = $_POST['pesq3'];
	include ('conexao.php');
	/* Conexão com o MySQL */
	$conexao = mysqli_connect($servidor,$usuario,$senha,$banco) 
	           or die ("Error " . mysqli_error($conexao));
	if(!$conexao){
		echo "Erro ao conectar ao banco de dados!";
		exit(); 
	}
	/* Consulta SQL aos registro */
	$sql = ("SELECT * FROM tb_livros WHERE livro LIKE '%$pesquisa%'");
?>	
    <h1>Resultado da Pesquisa</h1>
	<table border="1" align="center" width="80%">
				<tr align="center">
					<td width="10%">Codigo</td>
					<td width="30%">Livro</td>
					<td width="30%">Autor</td>
					<td width="30%">Editora</td>
				</tr>
			<?php
				# Executa a expressão no servidor (Exibe os dados)
				$resultado = mysqli_query($conexao,$sql);
				while ($tbl = mysqli_fetch_array($resultado)){
					$cod = $tbl['cod'];
					$livro = $tbl['livro'];
					$autor = $tbl['autor'];
					$editora = $tbl['editora'];
			
					echo "<tr>";
					echo "<td  align='center'>$cod</td>";
					echo "<td  align='center'>$livro</td>";
					echo "<td  align='center'>$autor</td>";
					echo "<td  align='center'>$editora</td>";
					echo "</tr>";
				}	
			?>

	</table>
	<p />
	<p />
    <form action="alteracao.php" method="post">
     <fieldset>
      <legend>Dados para alteração</legend> 
      <table border="0" width="100%">
	    <tr>	
		    <td>Código:</td><td><input type="text" name="codigo" placeholder="Código para alterar..." size="50"></td>
		</tr>	
		<tr>
		<tr>	
			<td>Livro:</td><td><input type="text" name="livro" placeholder="Alterar nome do livro..." size="50"></td>
		</tr>	
		<tr>
			<td>Autor:</td><td><input type="text" name="autor" placeholder="Alterar nome do autor..."  size="50"></td>
		</tr>
		<tr>
			<td>Editora:</td><td><input type="text" name="editora" placeholder="Alterar nome da editora..." size="50"></td>
		</tr>
		<td></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Alterar"></td>
		</tr>
	  </table>
	 </fieldset>	
	</form>
	
  <?php
	include ('rodape.inc');
  ?>
 </center>
 </body>
</html>