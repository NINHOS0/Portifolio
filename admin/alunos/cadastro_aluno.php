<?php

require_once("../conexao/banco.php");

$nome = $_REQUEST['txt_nome'];
$nascimento = $_REQUEST['txt_nascimento'];
$sexo = $_REQUEST['txt_sexo'];
$cep = $_REQUEST['txt_cep'];
$logradouro = $_REQUEST['txt_logradouro'];
$numero = $_REQUEST['txt_numero'];
$complemeto = $_REQUEST['txt_complemento'];
$cidade = $_REQUEST['txt_cidade'];
$estado = $_REQUEST['txt_estado'];
$email = $_REQUEST['txt_email'];
$telefone = $_REQUEST['txt_telefone'];
$celular = $_REQUEST['txt_celular'];
$escolaridade = $_REQUEST['txt_escolaridade'];
$serie = $_REQUEST['txt_serie'];
$conclusao = $_REQUEST['txt_conclusao'];
$escola = $_REQUEST['txt_escola'];
$objetivo = $_REQUEST['txt_objetivo'];


$sql = "insert into tb_aluno (alu_nome, alu_data_nascimento, alu_sexo, alu_cep, alu_logradouro, alu_numero, alu_complemento, alu_cidade, alu_estado, alu_email, alu_telefone, alu_celular, alu_escolaridade, alu_serie, alu_ano_conclusao, alu_escola, alu_objetivo) values('$aluno','$nascimento','$sexo','$cep','$logradouro','$numero','$complemeto','$cidade','$estado','$email','$telefone','$celular','$escolaridade','$serie','$conclusao','$escola','$objetivo')";

mysqli_query($con, $sql) or die("Erro na SQL!");

header("Location: consulta_aluno.php");

?>
