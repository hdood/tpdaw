<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="base.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

</head>
<body>
<ul>
    <li class="navbar-item"  id="main">
    <i class="fa-solid fa-industry fa-xl"></i>
    </li>
    <li style="background-color:#2c5585;" class="navbar-item" >
        <i class="fa-solid fa-user"></i>
        <a   id="new" href="Emp.php"><b>Employée</b></a>
    </li>
    <li class="navbar-item">
        <i class="fa-solid fa-building"></i>
        <a id="newd" href="Dept.php"><b>Departement</b></a></li>
        <li class="navbar-item">

    <a href="../index.php"><i class="fa-solid fa-house"></i> <b>Home</b></a>
   </li>
   

</ul>
<div style="clear: both;"></div>

<ul id="side-navbar">
<li id="head"> <b>Operations :</b></li>
<br>

<li id="side-navbar-link"><a href="Add.html"><i class="fa-solid fa-plus"></i> <i class="fa-solid fa-user "></i> <b>Add Emp</b></a></li>
<li id="search" ><form name="form" action="recherche/recherche.php" method="POST" >
<i class="fa-solid fa-magnifying-glass fa-xl"></i> <input placeholder="Search" id="search-bar" name="name" type="text">
<div style="padding-left : 2cm ; padding-top : 0.3cm">Search By :</div>
<div id="radio">
nom d'employer : <input type="radio" name="s" value="nom" checked>
numero d'employer : <input type="radio" name="s" value="no">
numero departement : <input type="radio" name="s" value="nod">
Lieu : <input type="radio" name="s" value="l">

</div>
<input type="submit" id="submit" value="Search">
</form></li>

<li><form class="Del" action="Add & Del/DelEmp.php" method="post">
    <div style="padding-left : 5mm ;padding-bottom: 0.5cm;">Delete employer : </div>
    noEmp: <input style="width: 2cm;border-radius: 45px; padding-left: 3mm;" type="text" name="dnoEmp" maxlength="5">
    <li id="side-navbar-link"><a href=""><i class="fa-solid fa-minus "></i> <i class="fa-solid fa-user "></i> <b> Del Emp</b></a></li>
    
    </form></li>


</ul>


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
    
    ?>
</table>
</div>
</body>
</html>