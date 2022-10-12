<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Projetos </title>

    <link rel="stylesheet" type="text/css" href="../css/formatacao.css">
</head>
<body>
        <form name="frm_projeto" action="cadastro_projeto.php" method="post">
            <div id="principal">
                <label> Descrição </label>
                <input name="txt_descricao" type="text" class="input_01">

                <label> Foto </label>
                <input name="txt_foto" type="text" class="input_01">

                <label> Status </label>
                <input name="txt_status" type="text" maxlength="1" class="input_01">

                <input name="btn_enviar" type="submit" value="Enviar" class="btn">
            
            </div>    
        </form>
</body>
</html>