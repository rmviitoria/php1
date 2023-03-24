<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exemplo5.css">
    <title>Document</title>
</head>
<body>
    <h1>Rifão do Jefão</h1>
    <h2>Gerador de Rifas 1.0</h2>

    <fieldset>
    <form action="premio.php" method="post">
        <br>
        <input type="number" name="qtd" id="qtd" placeholder="Quantidade de n°s">
        <br>
        <br>
        <input type="number" name="valor" id="valor" placeholder="Valor da rifa">
        <br>
        <br>
        <input type="text" name="premio" id="premio" placeholder="Prêmio do sorteio">
        <br>
        <br>
        <input type="text" name="data" id="data" placeholder="Data do sorteio">
        <br>
        <br>
        <input type="text" name="hora" id="hora" placeholder="Hora do sorteio">
        <br>
        <br>
        <input type="submit" name="btnGerar" id="btnGerar" placeholder="Gerar">
        <br>    
    </form>
    </fieldset>

    
</body>
</html>