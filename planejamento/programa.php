<?php
include "../lib/validaDatas.php";
validaDia (31,30);

date_default_timezone_set("Brazil/East");

$dataInicial= "";
$dataLimite="";

$dataInicial= $_POST["dataInicial"];
$dataLimite= $_POST["dataLimite"];

$dataInicial= str_replace("/", "-", $dataInicial);
$dataLimite= str_replace("/", "-", $dataLimite);

$dataAtual= date("d-m-Y");


$dataAtual= strtotime($dataAtual);
$dataInicial= strtotime($dataInicial);
$dataLimite= strtotime($dataLimite);


if ($dataAtual>= $dataInicial and $dataAtual<= $dataLimite){
	echo "Periodo bom para as compras";

}
else { 
	echo "Periodo ruim para as compras";
}	
?>
