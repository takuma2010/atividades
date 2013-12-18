<?php
$textoInicio = $_POST["incio"];
$textoFim = $_POST["fim"];

$textoInicio = explode("/", $textoInicio);
$textoFim = explode("/", $textoFim);


$tempoInicio = mktime(0, 0, 0, $textoInicio[1], $textoInicio[0], $textoInicio[2]);
$tempoFim = mktime(0, 0, 0, $textoFim[1], $textoFim[0], $textoFim[2]); 



$tempoAtual = time();

echo "sera que hoje é um bom dia pra fazer compra?";

if ($tempoAtual >= $tempoInicio and $tempoAtual <= $tempoFim ){
	echo " dia bom pra compra ";

}

else{
	echo "dia ruim pra fazer compra"; 

}

?>
