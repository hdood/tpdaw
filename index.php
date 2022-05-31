<?php
session_start() ; 

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <header>

    
<ul id="navbar">
    <li id="logo" style="float: left;"><i class="fa-solid fa-building-columns fa-2xl"></i></li>
    <?php  
    
        
    if(@!$_SESSION["v"]){
        ?>
        <li class="navbar-item"><a href="Login/Login.php"><i class="fa-solid fa-arrow-right-to-bracket"> </i> <b>login</b> </a></li>
        <li class="navbar-item" id="insc"><a href="inscription/inscription.html "><i class="fa-solid fa-pen-to-square"></i> <b>inscription</b></a></li>
        <?php }
    else{ ?>    
   <a href="Login/profile.php"> <li class="logged-in"><?php echo($_SESSION["name"]); echo(" ") ; echo($_SESSION["prenom"]) ; ?> </li> </a>
    <li class="logged-in" ><a href="Login/Logout.php" >Deconexion</a></li> 
   <?php }?>
</ul>
</header>
<div style="clear: both;"></div>

<ul id="side-navbar">
<li id="head"><i class="fa-solid fa-book "> Modules</i></li>
<br>
<li id="side-navbar-item">Les modules disponible : </li>                
</li>
<li id="side-navbar-link"><a href="LM.html"><i class="fa-solid fa-square-root-variable"></i> LM</a></li>
<li id="side-navbar-link"><a href="BD/Emp.php"><i class="fa-solid fa-database"></i> BD</a></li>
<li id="side-navbar-para"><p>- Le TP de javascript part 2 (resoudre equation de 2éme degreé) est dans la page <b>LM</b> .</p></li>
<li id="side-navbar-para"><p>- Dans la page <b>BD</b> </p></li>
</ul>


<div id="main">
    <h1 >LES MODULES ENSEIGNES EN LICENCE INFORMATIQUE :</h1>
    <h2 >2<sup>éme</sup>ANNEE INFORMATIQUE :</h2>
    <h3>1<sup>er</sup> semestre : </h3>
    <p>Liste des <b>modules</b> enseignés dans le <b>premier semestre</b> pour la 2ème année 
        <u>informatique</u> : SI, ASD, POO, TL, ADO, LM et ANG.</p>
        <h3>2<sup>éme</sup> semestre : </h3>
    <p>Liste des <b>modules</b> enseignés dans le <b>deuxième semestre</b> pour la 2ème année 
        <u>informatique</u> : DAW, BD, SE, GL, AJEL, TG, RC et ANG.</p>
        <h2>3<sup>éme</sup>ANNEE INFORMATIQUE : </h2>
        <h3>1<sup>er</sup> semestre : </h3>
        <p>Liste des <b>modules</b> enseignés dans le <b>premier semestre</b> pour la 3ème année 
            <u>informatique</u> : PLOG, IHM, PS, SE2, PL, GL2, COMP et ANG. </p>
        <h3>2<sup>éme</sup> semestre : </h3>
        <p>Liste des <b>modules</b> enseignés dans le <b>deuxième semestre</b> pour la 3ème année 
            <u>informatique</u> : APM, MR, Crypto, SINF et ABD.</p>
<table id="table" cellpadding="25" cellspacing="2" >
                <caption style="font-size: larger ;">LES MODULES ENSEIGNES EN LICENCE INFORMATIQUE</caption>
                <th colspan="2">Niveau</th>
                <th colspan="8">LES MODULES ENSEIGNES EN LICENCE INFORMATIQUE</th>
                
                <tr>
            <td rowspan="2">2<sup>éme</sup> ANNEES</td>
            <td>1<sup>er</sup> Semestre</td>
            <td>SI</td>
            <td>ASD</td>
            <td>POO</td>
            <td>TL</td>
            <td>ADO</td>
            <td>LM</td>
            <td>ANG</td>
            <td>/</td>
                </tr>
                <tr> 
            <td>2<sup>éme</sup> Semestre</td> 
            <td>DAW</td> 
            <td>BD</td> 
            <td>SE</td> 
            <td>GL</td> 
            <td>AJEL</td> 
            <td>TG</td> 
            <td>RC</td> 
            <td>ANG</td> 
                </tr>
                <tr>
             <td rowspan="2">3<sup>éme</sup> ANNEES</td>
             <td>1<sup>er</sup> Semestre</td>
             <td>PLOG</td>
             <td>IHM</td>
             <td>PS</td>
             <td>SE2</td>
             <td>PL</td>
             <td>GL2</td>
             <td>COMP</td>
             <td>ANG</td>
                 </tr>
                 <tr> 
             <td>2<sup>éme</sup> Semestre</td> 
             <td>APM</td> 
             <td>MR</td> 
             <td>Crypto</td> 
             <td>SINF</td> 
             <td>ABD</td> 
             <td>/</td> 
             <td>/</td> 
             <td>/</td> 
                 </tr>
                
            
            </table>




</div>
</body>
</html>
