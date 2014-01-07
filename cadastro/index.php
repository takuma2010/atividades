<?php
require_once("menu.php");

    session_start();
    
    if (isset($_SESSION["cadastros"])){
        
            $cadastros = $_SESSION["cadastros"];
            
            foreach($cadastros as $pessoas){
                if($pessoas != null){
                echo "$pessoas <br/>";
            }
            }  
    }
    else{
        echo"Não existem pessoas cadastradas";
     
    }   

?>
