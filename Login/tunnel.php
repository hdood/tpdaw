<?php 
session_start() ; 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $conn = mysqli_connect("localhost" , "id19013158_mahdi" ,"Bouguerzi-123" , "id19013158_daw") ; 
    $email = $_POST["email"] ; 
    $pass = $_POST["pass"] ; 
    $r =  mysqli_query($conn , "SELECT * FROM `administrateur` WHERE Psd_Ad = '$pass' AND MoP_Ad = '$email' ; ") ; 
    if(mysqli_num_rows($r) != 0 ){

        while($data = mysqli_fetch_array($r)){


            $_SESSION["name"] = $data["Nom_Ad"] ; 
            $_SESSION["prenom"] = $data["Prn_Ad"] ;         
        }
        $_SESSION["email"] = $email ; 
        $_SESSION["pass"] = $pass ; 
        $_SESSION["v"] = true ; 
        ob_start() ; 
        header("location:../index.php") ;
        ob_end_flush() ;  
    }
    else{
        $_SESSION["v"] = false ; 
         
        ob_start() ; 
        header("location:Login.php ") ;
        ob_end_flush() ; 
    }
  
    while($data = mysqli_fetch_array($r)){
        $_SESSION["pass"] = $data["Psd_Ad"] ; 
        $_SESSION["email"] = $data["MoP_Ad"] ;
    }




    
    
    ?>
    
</body>
</html>