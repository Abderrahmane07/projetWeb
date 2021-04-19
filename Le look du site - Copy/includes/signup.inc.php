<?php

//on vérifie que l'utilisateur à accéder à ce lien par la bonne méthode, c-a-d en cliquant sur le bouton s'enregistrer
if(isset($_POST["register"])){
    $name=$_POST["name"];
    $firstName=$_POST["firstName"];
    $dateBirth=date('Y-m-d', strtotime($_POST["dateBirth"]));
    $promo=$_POST["promo"];
    $username=$_POST["uid"];
    $email=$_POST["email"];
    $sex=$_POST["sex"];
    $address=$_POST["address"];
    $phone=$_POST["phone"];
    $pwd=$_POST["pwd"];
    $pwdRepeat=$_POST["pwdrepeat"];
    $state="att";

    require_once 'dbh.inc.php';

    // appel au fichier qui contient les fonctions pour gérer les erreurs
    require_once 'functions.inc.php';
    
    if (emptyInputSignup($name, $firstName, $dateBirth, $promo, $username, $email, $sex, $address, $phone, $pwd ,$pwdRepeat) !== FALSE){
        header("location: ../signup.php?error=emptyinput");
        // pour arrêter le script si jamais une erreur se produit
        exit();
    }
    if (invalideUid($username) !== FALSE){
        header("location: ../signup.php?error=invalidusername");
        exit();
    }
    if (invalideEmail($email) !== FALSE){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== FALSE){
        header("location: ../signup.php?error=pwdssarenotthesame");
        exit();
    }
    if (uidExists($conn, $username, $email) !== FALSE){
        header("location: ../signup.php?error=usernameoremailtaken");
        exit();
    }
    createUser($conn,$name, $firstName, $dateBirth, $promo, $username, $email, $sex, $address, $phone, $pwd);
}

else{
    header("location: ../signup.php");
    exit();
}