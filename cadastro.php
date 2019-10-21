<!DOCTYPE html>
<html lang="pt-br">
 <!-- Cabeçalho -->
 <head>
 	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="estilo.css">
 </head>
 <!-- Corpo do programa -->
 <body>
 <?php
	include ('banner.inc');
  ?>
 <!-- Fomulário do cadastro -->
 <h1>Cadastro</h1>
 <p />
 <form action="cadastrar.php?acao=adicionar" method="post">
   <fieldset> 
    <legend>Cadastro de HQs/Livros</legend>
	<table border="0">
	  <tr>	
		<td>Livro:</td><td><input type="text" name="livro" placeholder="Nome do livro..." size="50"></td>
	  </tr>	
	  <tr>
	    <td>Autor:</td><td><input type="text" name="autor" placeholder="Nome do autor..."  size="50"></td>
	  </tr>
      <tr>
        <td>Editora:</td><td><input type="text" name="editora" placeholder="Nome da editora..." size="50"></td>
	  </tr>
      <tr>
        <td>	  
			<select name="genero"> 
			<option value="acao">Ação</option> 
			<option value="comedia">Comédia</option> 
			<option value="terror">Terror</option> 
			<option value="bio">Biografia</option> 
			<option value="herois">Super Herói</option> 
		</td>
		</td><td>
	  <tr>
		<td>Observações:</td>
		<td><textarea></textarea></td>
	  </tr>	
	  </tr>
      <tr>
        <td><input type="submit" value="Cadastrar"></td>
		<td><input type="reset" value="Limpar"></td>
	  </tr>	
	</table>
   </fieldset>	
 </form>
 <?php
	include ('rodape.inc');
 ?>
 </body>
</html>