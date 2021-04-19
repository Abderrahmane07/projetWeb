

<?php   
require_once 'dbh.inc.php';

if(isset($_SESSION["useruid"]) && $_SESSION["userid"] == 2){  

    $query="SELECT * FROM users1 WHERE usersState='att';";
    $result =mysqli_query($conn, $query); 

    if($rows=mysqli_fetch_assoc($result)){ 
        echo "<div class='container-fluid' id='autour'><div class='row jumbotron'><div class='col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10'>";
        $phrase=$rows['usersName'].' '.$rows['usersFirstName'].' de la promotion '.$rows['usersPromo'].' souhaite rejoindre l annuaire de l ENSC, veuillez évaluer cette demande.';
        echo "<p class='lead'>";
        echo $phrase;
        echo "</p></div>";
        echo "<form method='POST' action=''><div class='col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2'><button type='submit' name='accepted' class='btn btn-outline-success btn-lg'>Accepter</button></div>";
        echo "<div class='col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2'><button type='submit' name='refused' class='btn btn-outline-danger btn-lg'>Refuser</button></div></div></div></form>";

        if(isset($_POST['accepted'])){
            $query2="UPDATE `users1` SET usersState='val' WHERE usersId='$rows[usersId]';";
            $result2 =mysqli_query($conn, $query2); 
        }
        if(isset($_POST['refused'])){
            $query2="UPDATE `users1` SET usersState='ref' WHERE usersId='$rows[usersId]';";
            $result2 =mysqli_query($conn, $query2); 
        }
    }
}





// tentative pour que toutes les inscriptions apparaissent, à compléter peut être


// if(isset($_SESSION["useruid"]) && $_SESSION["userid"] ==2){  

//     $query="SELECT * FROM users1 WHERE usersState='att';";
//     $result =mysqli_query($conn, $query); 

//     while($rows=mysqli_fetch_assoc($result)){ 
//         echo "<div class='container-fluid' id='autour'><div class='row jumbotron'><div class='col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10'>";
//         $phrase=$rows['usersName'].' '.$rows['usersFirstName'].' de la promotion '.$rows['usersPromo'].' souhaite rejoindre l annuaire de l ENSC, veuillez évaluer cette demande';
//         echo "<p class='lead'>";
//         echo $phrase;
//         $acc='accepted'.$rows['usersId'];
//         $ref='refused'.$rows['usersId'];
//         echo "</p></div>";
//         echo "<div class='col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2'><button type='submit' name=$acc class='btn btn-outline-success btn-lg'>Accepter</button></div>";
//         echo "<div class='col-xs-12 col-sm-12 col-md-3 offset-md-9 col-lg-3 offset-lg-9 col-xl-2 offset-xl-10'><button type='submit' name=$ref class='btn btn-outline-danger btn-lg'>Refuser</button></div></div></div>";
//     }
// }

// if(isset($_POST[$acc])){
    
// }
    



// <div class='container-fluid' id='autour'>
//         <div class='row jumbotron'>
//             <div class='col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10'>
//                 <p class='lead'>LENSC est une école publique dingénieurs de lInstitut National Polytechnique de Bordeaux. Elle forme des ingénieurs diplômés en  spécialistes de la cognition artificielle ou augmentée, des technologies numériques et de leurs
//                     usages, du facteur humain, de lergonomie et de lintégration homme-systèmes.</p>
//             </div>
//             <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
//                 <a href="https://fr.wikipedia.org/wiki/%C3%89cole_nationale_sup%C3%A9rieure_de_cognitique" target="_blank"><button type="button" class="btn btn-outline-secondary btn-lg">En savoir plus</button></a>
//             </div>
//         </div>
//     </div>





// $_SESSION["useruid"]) &&  -->
