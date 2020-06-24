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
$nome = $_POST['nome'];
$feedback = $_POST['feed'];
$answer = mysqli_query($conexao, "insert into feedback (nome, feed) values ('$nome', '$feedback') ");
mysqli_close($conexao);
echo "<p>Feedback enviado com sucesso</p>" ."<br>";
echo "<th width=250><a href='../forms.html'>Voltar</a><br></th>";
echo "<p style='background-color: #ffffff';></p>";
?>
</div>
</body>
</html>