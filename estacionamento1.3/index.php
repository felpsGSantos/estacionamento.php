<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>24/7 Parking</title>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="image/logo.png">
</head>

<body>
<div class="split-screen">
<div class="left">
<section class="copy">
 
</section>
</div>
<div class="right">
    <form action="ligacao.php" method="post">
        
    <div class= "img"></div>
        <img src="image/logo.png" width="300px">
        <section class="copy">
        <h2>24/7 Parking</h2>
        <div class="login-container">
           <strong>Cadastra-se</strong></a></p>
        </div>
    </section>
    <div class="input-container email">
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="digite seu email" required>
        </div>
        <div class="input-container password">
            <label for="fname">Senha</label>
            <input id="password" name="senha" type="password" placeholder="digite sua senha" required>

        </div>
        <div class="input-container cha">
        <label class="checkbox-container">
            <input type="checkbox" name="check">
            <span class="checkmark"></span>
            Li e estou de acordo com o Termo de Uso
            e Política de Privacidade
        </label>
        
        <input class="signup-btn" type="submit" name="Cadastre-se" >
            <section class="copy legal">
                <small>&copy;<sup></sup> Direitos autorais reservados e preservados de acordo com a LGPD &reg;</small>
            </section>
    </form>
    <?php
         
         if(isset($_GET['incorreto'])) {
            echo "<script>alert('" . $_GET['incorreto'] . "')</script>";
        } 
         
         
        if(isset($_GET['erro'])) {
            echo "<script>alert('" . $_GET['erro'] . "')</script>";
        }
         
        
        ?>
</div>
</div>
</html>