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
    
    $con = mysqli_connect("localhost","root","","daw") ; 

    $nom = $_POST["name"] ;
    $pass = $_POST["secret"] ; 
    $sexe = $_POST["Sexe"]   ; 
    $age = $_POST["Age"] ; 
    $anne = $_POST["Anne"] ;
    $act = $_POST["Act"] ; 
    $wil = $_POST["Wilaya"] ; 
    $adr = $_POST["Adresse"] ; 
    $ph = $_POST["Photos"]
    
  
    $r = mysqli_query($con,"SELECT * FROM emp ; ") ; 
    
    
    
    
    ?>
    
</body>
</html>