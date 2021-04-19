<?php
require_once("dbh.inc.php");

session_start();

//on vérifie que l'utilisateur à accéder à ce lien par la bonne méthode, c-a-d en cliquant sur le bouton sauvegarder
if(isset($_POST["update"]) && ($_COOKIE["userIdVerif"]==$_SESSION["userid"])){
    $expID=$_GET['ID'];
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

    $query = "UPDATE exps SET expsType='".$type."', expsSector='".$sector."', expsOrganisation='".$organisation."', expsBeg='".$dateBeg."', expsEnd='".$dateEnd."', expsCity='".$city."', expsDepartment='".$department."', expsSalary='".$salary."', expsDescription='".$description."', expsVisibility='".$visibility."' WHERE expsId='".$expID."' ";

    $result = mysqli_query($conn, $query);
    if($result){
        header("location: ../profile.php");
    }
    else{
        echo "something went wrong :/";
    }
}

else{
    header("location: ../index.php");
    exit();
}