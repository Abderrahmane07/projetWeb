<?php 
session_start();
if(isset($_SESSION["useruid"])){
    if($_SESSION["userstate"]!='val'){
        session_unset();
        session_destroy();
        header("location: ./login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Annuaire ENSC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/Logo_ENSC.png" />
</head>

<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img class="logo" src="img/Logo_ENSC.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php">Accueil</a>
                    </li>
                    <?php
                        if(isset($_SESSION["useruid"])){
                            echo "<li class='nav-item'><a class='nav-link' href='http://localhost/Le%20look%20du%20site%20-%20Copy/index.php#promos'>Les promotions</a></li>";
                        }
                    ?>                   
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/Le%20look%20du%20site%20-%20Copy/index.php#autour">Autour de nous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#connecter">Nous contacter</a>
                    </li>
                    <?php 
                        if(isset($_SESSION["useruid"])){
                            echo "<li class='nav-item'><a class='nav-link' href='profile.php'>Profile</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Log out</a></li>";
                        }
                        else{
                            echo "<li class='nav-item'><a class='nav-link' href='login.php'>Se connecter</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='signup.php'>S'inscrire</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </div>

    </nav>
