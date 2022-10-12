<?php

require_once("../conexao/banco.php");

$sql = "select * from tb_skill";
$sql = mysqli_query($con,$sql) or die("Erro na SQL!");

?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Consulta skill </title>

    <link rel="stylesheet" type="text/css" href="../css/consulta.css">

    <script type="text/javascript">   

        function excluir_registro() {

            if(!confirm('Deseja realmente excluir este registro?'))
            {

                if(window.event)

                    window.event.returnValue=false;

                else

                    e.preventDefault();

            }
        }

    </script>
</head>
<body>

    <div id="principal">
        <div class="linha">
            <div class="coluna_01"> <strong> ID </strong> </div>
            <div class="coluna_03"> <strong> Descrição </strong> </div>
            <div class="coluna_02"> <strong> Porcentagem </strong> </div>
            <div class="coluna_03"> <strong> Data </strong> </div>
        </div>
        

        <?php while ($dados = mysqli_fetch_array($sql)) { ?>
        <div class="linha">
            <div class="coluna_01"> <?php echo $dados["ski_codigo"]; ?> </div>
            <div class="coluna_03"> <?php echo $dados["ski_descricao"]; ?> </div>
            <div class="coluna_02"> <?php echo $dados["ski_porcentagem"]; ?> </div>
            <div class="coluna_03"> <?php echo $dados["ski_data_cadastro"]; ?> </div>
            
            <div class="coluna_01">
                <a href="delete_skill.php?ski_codigo=<?php echo $dados["ski_codigo"]; ?>" onclick="excluir_registro(event)">
                    <img src="../img/excluir.png" alt="Excluir">
                </a>
            </div>
            
            <div class="coluna_01">
                <a href="form_atualizar_skill.php?ski_codigo=<?php echo $dados["ski_codigo"]; ?>">
                    <img src="../img/edit.png" alt="Editar">
                </a>
            </div>
        </div>

        <br> <br>

    <?php } ?>
</body>
</html>