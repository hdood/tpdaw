<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="msg.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>
<body>

<ul>
    <li class="navbar-item" style="background-color:#2c5585 ;" id="main">
     <a href="index.html"> <i class="fa-solid fa-industry fa-xl"></i></a>  
    </li>
    <li class="navbar-item" >
        <i class="fa-solid fa-user"></i>
        <a id="new" href="NewEmp.html"><b>Employée</b></a>
    </li>
    <li class="navbar-item">
        <i class="fa-solid fa-building"></i>
        <a id="newd" href="Dept.php"><b>Departement</b></a></li>
   

</ul>
<div id='msg'>
    <?php
    $con = mysqli_connect("localhost" , "id19013158_mahdi" ,"Bouguerzi-123" , "id19013158_daw") ; 
    $no = $_POST["noEmp"] ; 
    $nom =$_POST["nomEmp"] ; 
    $f = $_POST["fonction"] ;

    $su = $_POST["noSup"] ; 
    $e = $_POST["embauche"] ; 
    $sa = $_POST["salaire"] ; 
    $c = $_POST["comm"] ;
    $nod = $_POST["noDept"] ;
    


$s = mysqli_query($con,"INSERT INTO `emp`(`noEmp`, `nomEmp`, `fonction`, `noSup`, `embauche`, `salaire`, `comm`, `noDept`) VALUES ('$no','$nom','$f','$su','$e','$sa','$c','$nod') ;") ;

   if ($s){
        echo("Employer added succesfully . ") ; 
   }   
   else{
       echo("error . please try again ! ") ;
   }
    ?>
    <div id="back"> <a href="../Emp.php"><i class="fa-solid fa-arrow-left"></i> <b>Back</b></a>
    </div>
    </div> 
</table>
</div>


</ul>