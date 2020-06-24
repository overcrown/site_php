<?php
//inserir.php
include "conexao.php";
$nome = $_POST['nome'];
$ra = $_POST['feed'];
$resultado = mysqli_query($conexao, "insert into aluno (nome,ra) values ('$nome', '$ra')");
mysqli_close($conexao);
echo"Inserção com sucesso!";
?>