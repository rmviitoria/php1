<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro site PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="Exemplo1.php ">Exemplo 1</a> |
    <a href="Exemplo2.php ">Exemplo 2</a> |
    <a href="Exemplo3.php ">Exemplo 3</a> |
    <a href="Exemplo4.php ">Exemplo 4</a> 
    <?php
        $nome = "Vitória Reis";
        $anoAtual = 2023;
        $anoNasc = 2006;
        $idade =$anoAtual - $anoNasc;
        //const NOME = "Vitória Reis";
        define('NOME', 'VITÓRIA MACHADO REIS');

        echo"<h1>Boa tarde!, ".$nome." </h1>";
        echo"<p> A aluna " .$nome. " tem " .$idade. " anos<p/>";
        echo"Aluna ".NOME;
    ?>
</body>
</html>