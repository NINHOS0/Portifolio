<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SKILL </title>

    <link rel="stylesheet" type="text/css" href="../css/formatacao.css">
</head>
<body>
        <form name="frm_skill" action="cadastro_skill.php" method="post">
            <div id="principal">
                <label> Descrição </label>
                <input name="txt_descricao" type="text" class="input_01">

                <label> Porcentagem </label>
                <input name="txt_porcentagem" type="text" class="input_01">

                <!-- <label> Senha </label>
                <input name="txt_senha" type="password" class="input_01"> -->

                <input name="btn_enviar" type="submit" value="Enviar" class="btn">
            
            </div>    
        </form>
</body>
</html>