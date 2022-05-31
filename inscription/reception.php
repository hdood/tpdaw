<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Reception</title>
    <style>
        body{

            body {
    background-color: #4b5056 ;
    text-align: center;
    overflow-x: hidden;
    color: white;
    font-family: 'Poppins', sans-serif;

}
        }
    .msg{
    position: relative;
    top : 5cm ;
    padding-top : 1cm  ;
    text-align : center ; 
    margin: auto;
    background-color: transparent;
    box-shadow: 2px 2px 5px black;
    width:10cm;
    height: 2cm;
    border-radius:1cm  ;
    color : white ; 
}
#back {
    position: relative;
    top : 5.5cm ; 
    text-align: center;
    background-color: #6d99ce;
    padding : 3mm ;
    width: 2cm;
    border-radius: 45px;
    box-shadow: 2px 2px 5px black;
    margin : auto ;

}
#back:hover{
    background-color:#ccd1da;
    cursor: pointer;
}
#back a{
    text-decoration: none;
    color: white;
}
    </style>
</head>
<body>
    <div class="msg">
    <?php 
    
    $con = mysqli_connect("localhost" , "id19013158_mahdi" ,"Bouguerzi-123" , "id19013158_daw") ; 

    $nom = $_POST["name"] ;
    $pass = $_POST["secret"] ; 
    $sexe = $_POST["Sexe"]   ; 
    $age = $_POST["Age"] ; 
    $anne = $_POST["Anne"] ;
    $act = $_POST["Act"] ; 
    $wil = $_POST["Wilaya"] ; 
    $adr = $_POST["Adresse"] ; 
    $ph = $_POST["Photos"] ;
        
  
    $r = mysqli_query($con,"CALL AjouEt('$nom','$sexe','$age','$adr','$wil','$ph','$pass','$anne','$act' ); ") ; 
    if($r){

        echo("l'etudiant ") ;
        echo($nom) ; 
        echo(" a été ajouter.") ;
    }
    else{
        echo("error please try again . ") ;   
    }
    
    
    
    
    ?>
    </div>
    <div id="back"> <a href="../index.html"><i class="fa-solid fa-arrow-left"></i> <b>Back</b></a>

    
</body>
</html>