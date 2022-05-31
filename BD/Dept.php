<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Dept.css">    
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
    <li class="navbar-item" >
        <i class="fa-solid fa-user"></i>
        <a id="new" href="Emp.php"><b>Employée</b></a>
    </li>
    <li style="background-color:#2c5585 ;" class="navbar-item">
        <i class="fa-solid fa-building"></i>
        <a  id="newd" href="Dept.php"><b>Departement</b></a></li>
   <li class="navbar-item">

    <a href="../index.php"><i class="fa-solid fa-house"></i> <b>Home</b></a>
   </li>

</ul>
</ul>
<div style="clear: both;"></div>

<ul id="side-navbar">
<li id="head"> <b>Operations :</b></li>
<br>
<li id="h1"><b>Add Dept :</b></li>
<li class="form" ><form action="Add & Del/AddDept.php" method="POST">

    <table   style="right : 1cm; text-align: left;">
<tr >
    <td><b>noDept:</b></td>
    <td><input  class="hello"   type="text" name="noDept" maxlength="3"></td>
</tr>
<tr>
    <td ><b>nomDept:</b></td>
    <td><input   type="text" name="nomDept"maxlength="15"></td>
</tr>
<tr>
    <td><b>lieu :</b></td>
    <td><input type="text" name="lieu" maxlength="15"></td>
</tr>
    </table>
  
<input id="sub" type="submit" value="add"></li>



</form></li>
<hr style="width: 7cm;position: relative;right: 1cm;">
<li id="h1"><b>Delete Dept :</b></li>
<li>
    
<form action="Add & Del/DelDept.php" method="post">
    <table  style="right : 1cm; text-align: left;">

        <tr>
            <td><b>noDept:</b></td>
            <td><input    type="text" name="noDept" maxlength="3"></td>
        </tr>
    </table>

    <input id="sub" type="submit" value="Delete"></li></form>



</li>
</ul>
<div class="table-pos">
 <table>

    <th><b>noDept</b> </th>
    <th><b>nomDept</b></th>
    <th><b>lieu</b></th>
   
 
    <?php
    $hello = @$_POST["hello"] ;  
    error_reporting(0) ;
    $con = mysqli_connect("localhost" , "id19013158_mahdi" ,"Bouguerzi-123" , "id19013158_daw") ; 
    $r = mysqli_query($con,"SELECT * FROM dept ; ") ; 
     while($data = mysqli_fetch_array($r)){
         echo("<tr>") ;
         echo("<td>") ;
         echo($data['noDept']) ;
         echo("</td>");
         echo("<td>") ;
         echo($data['nomDept']) ;
         echo("</td>");
         echo("<td>") ;
         echo($data['lieu']) ;
         echo("</td>");
         echo("</tr>") ;
        }    
        
    
    ?>
</table>
</div>


</ul>