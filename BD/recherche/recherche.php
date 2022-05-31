<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="recherche.css">    
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

        <div class="back">

        <li class="navbar-item">

    <a href="../Emp.php">Back</a>

        </li>

        </div>
        <div class="table-pos">
<table>
<th><b>noEmp</b> </th>
    <th><b>nomEmp</b></th>
    <th><b>fonction</b></th>
    <th><b>noSup</b></th>
    <th><b>embauche</b></th>
    <th><b>salaire</b></th>
    <th><b>comm</b></th>
    <th><b>noDept</b></th>


<?php 

    $con = mysqli_connect("localhost" , "id19013158_mahdi" ,"Bouguerzi-123" , "id19013158_daw") ; 
    $r = mysqli_query($con,"SELECT * FROM emp ; ") ; 
    
                     
    $s =$_POST["s"] ; 
    $n =$_POST["name"] ;
     
    if($s == "nom") {

        $r = mysqli_query($con,"SELECT * FROM emp WHERE nomEmp = '$n' ; ") ;
        while($data = mysqli_fetch_array($r)){
            echo("<tr>") ;
            echo("<td>") ;
            echo($data['noEmp']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['nomEmp']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['fonction']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['noSup']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['embauche']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['salaire']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['comm']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['noDept']) ;
            echo("</td>");
            echo("</tr>") ;
           }    
    }
    if ($s == "no"){
        $r = mysqli_query($con,"SELECT * FROM emp WHERE noEmp = '$n' ; ") ;
        while($data = mysqli_fetch_array($r)){
            echo("<tr>") ;
            echo("<td>") ;
            echo($data['noEmp']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['nomEmp']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['fonction']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['noSup']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['embauche']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['salaire']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['comm']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['noDept']) ;
            echo("</td>");
            echo("</tr>") ;
           } 
    }
    if($s =="nod"){

        $r = mysqli_query($con,"SELECT * FROM emp WHERE noDept = '$n' ; ") ;
        while($data = mysqli_fetch_array($r)){
            echo("<tr>") ;
            echo("<td>") ;
            echo($data['noEmp']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['nomEmp']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['fonction']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['noSup']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['embauche']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['salaire']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['comm']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['noDept']) ;
            echo("</td>");
            echo("</tr>") ;
           } 
    }
    if($s == "l"){
        $r = mysqli_query($con,"SELECT * FROM emp INNER JOIN dept ON emp.noDept = dept.noDept WHERE lieu = '$n' ; ") ;
        while($data = mysqli_fetch_array($r)){
            echo("<tr>") ;
            echo("<td>") ;
            echo($data['noEmp']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['nomEmp']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['fonction']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['noSup']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['embauche']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['salaire']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['comm']) ;
            echo("</td>");
            echo("<td>") ;
            echo($data['noDept']) ;
            echo("</td>");
            echo("</tr>") ;
           } 
    }

?> 
</table>
</div>
   

</ul>