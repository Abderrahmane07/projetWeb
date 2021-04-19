<?php 

require_once 'dbh.inc.php';
session_start();

if(isset($_GET['DelID'])  && ($_COOKIE["userIdVerif"]==$_SESSION["userid"])){
    $expId=$_GET['DelID'];
    $query = "DELETE FROM exps WHERE expsId='".$expId."'";
    $result= mysqli_query($conn, $query);

    if($result){
        header("location: ../index.php");
    }
    else{
        echo "something went wrong :/";
    }
}
else{
    header("location: ../profile.php");
    exit();
}