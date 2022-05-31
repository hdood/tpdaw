<?php 
    session_start() ;
    if(isset($_SESSION["v"])){
            if($_SESSION["v"]){
                header("location:../index.php") ; 
            }
    }
    
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_SESSION["v"])){
        if(!$_SESSION["v"]){ 
            ?>
        <div class="error"><p>Wrong informations please try again !</p></div>
        <?php   }} 
        unset($_SESSION["v"]) ; 
        
        ?>
<div class="form">
    <div class="container">
        <form action="tunnel.php" method="post" >
            <div id="email"><div id="e" class="label" >Email :</div> <input  type="text" name="email" id=""></div><br>
            <div id="pass"><div class="label">Password :</div><input type="password" name="pass" id=""></div>
            <input id="btn-login" type="submit" value="Login">
        </form>
    </div>
   
</div>
<?php
    if(isset($_SESSION["v"])){
        if(!$_SESSION["v"]){ 
            ?>
        <div class="error"><p>Wrong informations please try again !</p></div>
        <?php   }} 
        unset($_SESSION["v"]) ; 
        
        ?>
    
    
    
    




</body>
</html>