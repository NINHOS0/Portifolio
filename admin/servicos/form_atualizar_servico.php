<?php

require_once("../conexao/banco.php");


$id = $_REQUEST['ser_codigo'];

$sql = "select * from tb_servicos where ser_codigo = '$id'";
$sql = mysqli_query($con, $sql) or die ("Erro na SQL!");
$dados = mysqli_fetch_array($sql);

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulário Atualizar </title>
    <link rel="stylesheet" type="text/css" href="../css/formatacao.css">
</head>
<body>
    <form name="frm_servico" action="atualizar_servico.php" method="post">
        <div id="principal">
            <label>Código</label>
            <input name="txt_codigo" type="text" class="input_01" value="<?php echo $id; ?>">

            <label>Título</label>
            <input name="txt_titulo" type="text" class="input_01" value="<?php echo $dados["ser_titulo"]; ?>">

            <label>Descrição</label>
            <input name="txt_descricao" type="text" class="input_01" value="<?php echo $dados["ser_descricao"]; ?>">

            <label>Ícone</label>
            <input name="txt_icone" type="text" class="input_01" value="<?php echo $dados["ser_icone"]; ?>">

            <input name="btn_enviar" type="submit" value="Enviar" class="btn">
        </div>
    </form>
</body>
</html>