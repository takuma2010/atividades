<?php
    echo '<body bgcolor="silver">';


    require_once("menu.php");

    session_start();
    
    
    if(!isset($_SESSION["cadastros"])){
        echo "Não existem cadastros para editar.";
    }
    else{
        $id = $_REQUEST["id"];
        $produtoNovo = $_REQUEST["produtoNovo"];
        $cor = $_REQUEST["cor"];
        $nome = $_REQUEST["nome"];
        
        $livros = array();
        $produto["produtoNovo"] = $produtoNovo;
        $produto["cor"] = $cor;
        $produto["nome"] = $nome;
        
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = $produto;    
        echo "Edição Bem Sucedida!!";
    
    
    }
    
    
    
    
        
    
    

?>
