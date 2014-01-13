<?php
   
   echo '<body bgcolor="orange">';
  
    require_once("menu.php");
    
    session_start();
    
    
    if(isset($_SESSION["cadastros"])){
        
        $cadastros = $_SESSION["cadastros"];
        
        echo "<dl>";
        foreach($cadastros as $produto){
            $cor = $produto["cor"];
            $nome = $produto["nome"];
           
            
            
            
        if($produto != null){
            echo '<br>';
            echo "<dt class='$cor'>" . $produto["nome"] .  "</dt>";
            echo "<dd>cor: " . $produto["cor"] . "</dd>";
            echo "<dd>produtoNovo: " . $produto["produtoNovo"] . "</dd>";
            echo "<dd>produto Novo: ";
            if($produto){
                echo "sim";
            }
            else{
                echo "Não";
            }
            echo "</dd>";
        }
            
    }
    echo "</dl>";
}
else{
    echo "Não existem produtos cadastradas";
}
    
?>
