<?php

require_once("../conexao/banco.php");

$sql = "select * from tb_aluno";
$sql = mysqli_query($con,$sql) or die("Erro na SQL!");

?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Consulta Aluno </title>

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
            <div class="coluna_02"> <strong> Nome </strong> </div>
            <div class="coluna_02"> <strong> Sexo </strong> </div>
            <div class="coluna_02"> <strong> Data de nascimento </strong> </div>
            <div class="coluna_01"> <strong> Estado </strong> </div>
            <div class="coluna_02"> <strong> Celular </strong> </div>
            <div class="coluna_01"> <strong> Série </strong> </div>
            <div class="coluna_02"> <strong> Escola </strong> </div>
        </div>
        

        <?php while ($dados = mysqli_fetch_array($sql)) { ?>
        <div class="linha">
            <div class="coluna_01"> <?php echo $dados["alu_codigo"]; ?> </div>
            <div class="coluna_02"> <?php echo $dados["alu_nome"]; ?> </div>
            <div class="coluna_02"> <?php echo $dados["alu_sexo"]; ?> </div>
            <div class="coluna_02"> <?php echo $dados["alu_data_nascimento"]; ?> </div>
            <div class="coluna_01"> <?php echo $dados["alu_estado"]; ?> </div>
            <div class="coluna_02"> <?php echo $dados["alu_celular"]; ?> </div>
            <div class="coluna_01"> <?php echo $dados["alu_serie"]; ?> </div>
            <div class="coluna_02"> <?php echo $dados["alu_escola"]; ?> </div>
            
            <div class="coluna_01">
                <a href="delete_aluno.php?alu_codigo=<?php echo $dados["alu_codigo"]; ?>" onclick="excluir_registro(event)">
                    <img src="../img/excluir.png" alt="Excluir">
                </a>
            </div>
            
            <div class="coluna_01">
                <a href="form_atualizar_aluno.php?alu_codigo=<?php echo $dados["alu_codigo"]; ?>">
                    <img src="../img/edit.png" alt="Editar">
                </a>
            </div>
        </div>

        <br> <br>

    <?php } ?>
</body>
</html>