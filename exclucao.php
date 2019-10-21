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
 <?php
	include ('banner.inc');
  ?>
  <!-- Cadastro no BD -->
<?php
	$codigo = $_POST['codigo']; // $variável = $_método['nome_componente_formulário'];
	include ('conexao.php');
?>


<!-- ******************************************************************************************* -->
<?php
    /* Conexão com o MySQL */
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
    
    if(!$conexao){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }  

    $sql = "DELETE from tb_livros WHERE cod='$codigo'";
	//Dados cadastrados no BD
    $resultado = mysqli_query($conexao, $sql);
    
    if(mysqli_affected_rows($conexao) != 0){
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projetofinal/exclui.php'>
                    <script type='text/javascript'>alert('Dados excluido com sucesso!!!');
                    </script>
                    ";    
            }else{
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projetofinal/exclui.php'>
                    <script type='text/javascript'>alert('Os dados não foram excluido!!!');
                    </script>
                ";    
            }
?>
<!-- ******************************************************************************************* -->


 <?php
	include ('rodape.inc');
 ?>
 </body>
</html>