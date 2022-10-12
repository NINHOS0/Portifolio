<?php

require_once("../conexao/banco.php");

$id = $_REQUEST["txt_codigo"];
$titulo = $_REQUEST["txt_titulo"];
$descricao = $_REQUEST["txt_descricao"];
$icone = $_REQUEST["txt_icone"];

$sql = "update tb_servicos set ser_titulo = '$titulo', ser_descricao = '$descricao', ser_icone = '$icone' where ser_codigo = '$id'";

mysqli_query($con,$sql) or die("Erro na SQL!");

header("Location: consulta_servico.php");

?>