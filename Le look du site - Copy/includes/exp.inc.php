<?php

session_start();

//on vérifie que l'utilisateur à accéder à ce lien par la bonne méthode, c-a-d en cliquant sur le bouton sauvegarder
if(isset($_POST["save"])){
    $type=$_POST["type"];
    $sector=$_POST["sector"];
    $organisation=$_POST["organisation"];
    $dateBeg=date('Y-m-d', strtotime($_POST["dateBeg"]));
    $dateEnd=date('Y-m-d', strtotime($_POST["dateEnd"]));    
    $city=$_POST["city"];
    $department=$_POST["department"];
    $salary=$_POST["salary"];
    $description=$_POST["description"];
    $visibility=$_POST["visibility"];
    //$uID=$_SESSION["uID"];
    

    require_once 'dbh.inc.php';

    // appel au fichier qui contient les fonctions pour gérer les erreurs
    require_once 'functions.inc.php';

    $userID=intval($_SESSION["userid"]);
    
    createExp($conn, $type, $sector, $organisation, $dateBeg, $dateEnd, $city, $department, $salary, $description, $visibility, $userID);
}

else{
    header("location: ../profile.php");
    exit();
}