<html lang="pt-br">
 <!-- Cabeçalho -->
 <head>
 	<meta charset="UTF-8"/>
    <title>SisHQs - Pesquisa</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
 </head>
 <!-- Corpo do programa -->
 <body>
 <?php
	include ('banner.inc');
  ?>
 <!-- Fomulário de pesquisa -->
 <h1>Pesquisa</h1>
 <p />
 <form action="pesquisar.php?acao=consultar" method="post">
   <fieldset> 
    <legend>Pesquisa de HQs/Livros</legend>
	<table border="0">
	  <tr>	
		<td>Pesquisa:</td><td><input type="text" name="pesquisa" placeholder="Pesquisa por livro, autor, editora..." size="50"></td>
	  </tr>	
      <tr>
	   <td></td>
       <td>
	        Livro <input type="checkbox" name="pesq1" value="livro">
			Autor <input type="checkbox" name="pesq2" value="autor">
			Editora <input type="checkbox" name="pesq3" value="editora">
	   </td>
	  </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Pesquisar"></td>
	  </tr>	
	</table>
   </fieldset>	
 </form>
 <?php
	include ('rodape.inc');
 ?>
 </body>
</html>