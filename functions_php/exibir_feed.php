<!DOCTYPE html>
<html lan="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Inserção</title>
	<style>
		body {
			background-color: rgb(170, 40, 44);
		}
		p {
			color: #ffffff;
			font-size: 22pt;
			font-family: arial;
		}
		a {
			font-size: 25pt;
			color: #ffffff;	
			font-family: arial;
		}
		div#conteudo_php {
			position: absolute;
			padding: 15px;
			margin-left: 70px;
			color: #ffffff;
		}
	</style>
</head>
<body>
<div id="conteudo_php">
<?php
//inserir_feed.php 
include "conexao.php";
$resultado = mysqli_query($conexao, "select * from feedback");
while ($linha = mysqli_fetch_assoc($resultado)) {
	echo "<tr>";
	echo "<td>" . $linha['id'] . "</td> - ";
	echo "<td>" . $linha['nome'] . "</td> </br>";
	echo "<td>" . $linha['feed'] . "</td> </br>";
	echo "<td>-------------------------------------</td></br>";
	echo "<tr>";
}
mysqli_close($conexao);
echo "<th width=250><a href='../forms2.html'>Voltar</a><br></th>";
?>
</div>
</body>
</html>