<?php

require_once("../conexao/banco.php");

$id = $_REQUEST["alu_codigo"];

$sql = "delete from tb_aluno where alu_codigo = '$id'";

mysqli_query($con,$sql) or die("Erro na SQL!");

header("Location: consulta_aluno.php");

?>