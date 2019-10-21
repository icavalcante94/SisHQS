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
	$acao = $_GET['acao'];
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
	<table border="1" align="center">
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
	
	
  <?php
	include ('rodape.inc');
  ?>
 </center>
 </body>
</html>