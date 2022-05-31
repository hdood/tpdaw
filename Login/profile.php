<?php 
session_start() ;


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="container">
    nom : <?php echo ($_SESSION["name"]) ;  ?> <br> 
    prénom : <?php echo ($_SESSION["prenom"]) ; ?> <br>
    adresse : <?php echo ($_SESSION["email"]) ; ?> <br>
    password :  <?php echo ($_SESSION["pass"]) ; ?> 
    </div>
    <div class="btn">
        <ul>
        <li class="navbar-item">
            <a href="Logout.php">Déconexion</a>
        </li>
        <li class="navbar-item">
            <a href="../index.php">retour</a>
        </li></ul>
    </div>
</body>
</html>