<?php

require_once("../conexao/banco.php");

$descricao = $_REQUEST['txt_descricao'];
$porcentagem = $_REQUEST['txt_porcentagem'];

$sql = "insert into tb_skill (ski_descricao, ski_porcentagem) values('$descricao','$porcentagem')";

mysqli_query($con, $sql) or die("Erro na SQL!");

header("Location: consulta_skill.php");

?>
