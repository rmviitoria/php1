<?php
if (empty($_POST) || (empty($_POST["qtd"]) ||
    (empty($_POST["valor"]) || (empty($_POST["premio"])
        || (empty($_POST["data"]) || (empty($_POST["hora"])
        )))))) {
    print("<script> alert('Preencha os dados do formulario');
   location.href='exemplo6.php';</script> ");
}

$qtd = $_POST["qtd"];
$valor = $_POST["valor"];
$premio = $_POST["premio"];
$data = $_POST["data"];
$hora = $_POST["hora"];
echo "<hr>";
for ($i = 1; $i <= $qtd; $i++) {
    echo "Prêmio: " . $premio . "<br>";
    echo "Valor da Rifa: R$" . $valor . "<br>";
    echo "Data do sorteio" . $data . "<br>";
    echo "Hora do Sorteio:" . $hora . "<br>";
    echo "Nº :" . str_pad($i , 4 , '0' , STR_PAD_LEFT). "<br>";

    echo "<hr>";
}