<?php
$nome = "Vitória Reis";
$peso = 55.0;
$altura = 1.63;
//$imc = $peso/($altura*$altura);
$imc = $peso/pow($altura,2);

if($imc < 20){
    $resultado = "Peso abaixo - coma mais!";
}else if($imc >= 20 && $imc <24.9){
    $resultado = "Peso normal - Nojento(a)";
}else if($imc >= 25 && $imc < 29.9){
    $resultado = "Obesiade Leve - Safadinho(a)";
}else if ($imc >= 30 && $imc < 38.9){
    $resultado = "Obesidade moderada - Caminha elefante!";
}else {
    $resultado = "Obesidade Mórbida - traz o guindaste!";
}
echo "<h1>". $nome." seu imc é ".number_format($imc, 2, '.', '')."<br>seu resultado: ".$resultado."</h1>";
?>