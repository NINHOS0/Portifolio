<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Serviços </title>

    <link rel="stylesheet" type="text/css" href="../css/formatacao.css">
</head>
<body>
        <form name="frm_servico" action="cadastro_servico.php" method="post">
            <div id="principal">
                <label> Título </label>
                <input name="txt_titulo" type="text" class="input_01">

                <label> Descrição </label>
                <input name="txt_descricao" type="text" class="input_01">

                <label> Ícone </label>
                <input name="txt_icone" type="text" class="input_01">

                <input name="btn_enviar" type="submit" value="Enviar" class="btn">
            
            </div>    
        </form>
</body>
</html>