<?php

// Les fonctions pour signup.inc.php


function emptyInputSignup($name, $firstName, $dateBirth, $promo, $username, $email, $sex, $address, $phone, $pwd ,$pwdRepeat){
    $result;
    if(empty($name) || empty($firstName) || empty($dateBirth) || empty($promo) || empty($username) || empty($email) || empty($sex) || empty($address) || empty($phone) || empty($pwd) || empty($pwdRepeat)){
        $result=TRUE;
    }
    else{
        $result=FALSE;
    }
    return $result;
}

function invalideUid($username){
    $result;
    // preg_match est une built-in function dans php qui nous permet de préciser les carctères qu'on permet d'avoir dans son nom d'utilisateur
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result=TRUE;
    }
    else{
        $result=FALSE;
    }
    return $result;
}

function invalideEmail($email){
    $result;
    // FILTER_VALIDATE_EMAIL nous permet de vérifier si l'email est correct
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=TRUE;
    }
    else{
        $result=FALSE;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result;
    if ($pwd !== $pwdRepeat){
        $result=TRUE;
    }
    else{
        $result=FALSE;
    }
    return $result;
}

// On vérifie si l'utilisateur existe déjà, on va utiliser cette même fonction pour le connecter 
function uidExists($conn, $username, $email){
    // pour empêcher les injections on évite de passer directement les paramètres saisies par l'utlisateur
    $sql="SELECT * FROM users1 WHERE usersUid = ? OR  usersEmail = ?;";
    $stmt=mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData= mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result=FALSE;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $firstName, $dateBirth, $promo, $username, $email, $sex, $address, $phone, $pwd){
    $sql="INSERT INTO users1 (usersName, usersFirstName, usersDateBirth, usersPromo, usersUid, usersEmail, usersSex, usersAddress, usersPhone, usersPwd) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt=mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedpwd=password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssissssis", $name, $firstName, $dateBirth, $promo, $username, $email, $sex, $address, $phone, $hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

// Les fonctions pour login.inc.php

function emptyInputLogin($username, $pwd){
    $result;
    if(empty($username) || empty($pwd)){
        $result=TRUE;
    }
    else{
        $result=FALSE;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists=uidExists($conn, $username, $username);

    if($uidExists === FALSE){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd=password_verify($pwd, $pwdHashed);

    if($checkPwd===false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd===true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        $_SESSION["userstate"] = $uidExists["usersState"];

        header("location: ../index.php");
        exit();
    }
}

// Les fonctions pour profile.inc.php


function createExp($conn, $type, $sector, $organisation, $dateBeg, $dateEnd, $city, $department, $salary, $description, $visibility, $userID){
    
    $sql="INSERT INTO exps (expsType, expsSector, expsOrganisation, expsBeg, expsEnd, expsCity, expsDepartment, expsSalary, expsDescription, expsVisibility, usersexpsId) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt=mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../profile.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssssissi", $type, $sector, $organisation, $dateBeg, $dateEnd, $city, $department, $salary, $description, $visibility, $userID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    // if($uID==2){
    //     header("location: ../profile.php?error=id2");
    // }
    header("location: ../profile.php?error=none");
    
    
    exit();
}
