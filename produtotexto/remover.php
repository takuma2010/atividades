<?php

    echo '<body bgcolor="silver">';




    require_once("menu.php");

    session_start();
    
    
    if(!isset($_SESSION["cadastros"])){
        echo "Não existem produtos cadastrados para remover.";
    }
    else{
        $id = $_REQUEST["id"];
        
        
        $cadastros =& $_SESSION["produto"];
        $cadastros[$id] = null;    
    
        echo "Remoção Bem Sucedida!!";
    
    
    }
    
    
?>
