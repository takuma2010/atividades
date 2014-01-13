<?php
    
    echo '<body bgcolor="silver">';
    
    
    
    require_once("menu.php");
    
    session_start();
    
    
    if(!isset($_SESSION["cadastros"])){
        $_SESSION["cadastros"] = array();
        

    }
    
    $cor = $_REQUEST["cor"];
    $nome = $_REQUEST["nome"];
    $produtoNovo = $_REQUEST["produtoNovo"];
   
    
    $produtoNovo = false;
    if(isset($_REQUEST["produtoNovo"])){
        
        $produtoNovo = true;
        
        
    }
    
    $produto = array();
    $produto["produtoNovo"] = $produtoNovo;
    $produto["nome"] = $nome;
    $produto["cor"] = $cor;
    
    
    
    array_push($_SESSION["cadastros"], $produto);
    
    
    
        echo "Cadastro bem sucedido!!";
    
    


?>
