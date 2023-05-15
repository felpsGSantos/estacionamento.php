<?php 
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, "senha");

  //isset para filtar só chekbox.
if (isset($_POST['check'])) {
   // header("Location: index.php");
       // exit; 
       
       if ($email=="felipe.gomessan@gmail.com" && $senha=="1234") {
        
        // Função header é usada para o redirecionamento em php.
        header("Location:home.php");
        exit;  
    
    }else {
        
        
        header("Location: index.php?incorreto= Sua senha o E-mail não foi digitado corretamente");
        exit;
        
        
     }   
}else {
 
    header("Location: index.php?erro= Marque a caixa de checagem");
    exit;
   
}



?>     
 <img src="image/logo.png" alt="">
        
   



  

  

