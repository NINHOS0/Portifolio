<?php

require_once("../conexao/banco.php");

$id = $_REQUEST["txt_codigo"];
$descricao = $_REQUEST["txt_descricao"];
$porcentagem = $_REQUEST["txt_porcentagem"];

$sql = "update tb_skill set ski_descricao = '$descricao', ski_porcentagem = '$porcentagem' where ski_codigo = '$id'";

mysqli_query($con,$sql) or die("Erro na SQL!");

header("Location: consulta_skill.php");

?>