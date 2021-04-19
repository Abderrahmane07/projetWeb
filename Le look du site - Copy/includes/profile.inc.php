<?php   
require_once 'dbh.inc.php';

if(isset($_SESSION["useruid"])){
    $userID=$_SESSION['userid'];
    $query="SELECT * FROM exps WHERE usersexpsId=$userID;";
    $result =mysqli_query($conn, $query); 

    while($rows=mysqli_fetch_assoc($result)){
        $type=$rows['expsType'];
        $sector=$rows['expsSector'];
        $organisation=$rows['expsOrganisation'];
        $dateBeg=date('Y-m-d', strtotime($rows['expsBeg']));
        $dateEnd=date('Y-m-d', strtotime($rows['expsEnd']));    
        $city=$rows['expsCity'];
        $department=$rows['expsDepartment'];
        $salary=$rows['expsSalary'];
        $description=$rows['expsDescription'];
        $visibility=$rows['expsVisibility'];
        $ID=$rows['expsId'];
        $userId=$rows['usersexpsId'];

        echo "<div class='container-fluid padding'><div class='col-md-8 offset-md-2 col-sm-10 offset-sm-1'><div class='header'><h2>Expérience</h2></div>";
        echo "<div class='signlog'><div class='input-group'>Type : $type</div>";
        echo "<div class='input-group'>Secteur : $sector</div><div class='input-group'>Organisation : $organisation</div>";
        echo "<div class='input-group'>Date de début : $dateBeg</div><div class='input-group'>Date de fin : $dateEnd</div>";
        echo "<div class='input-group'>Ville : $city</div><div class='input-group'>Département : $department</div><div class='input-group'>Salaire : $salary</div>";
        ?>
        <div class="input-group">Description : <?php echo $description; ?></div>
        <div class="input-group">Visibilité : <?php echo $visibility; ?></div>
        <a href="./edit.php?GetID=<?php echo $ID; ?>"><button class="btn btn-outline-warning">Modifier</button></a>
        <div class="input-group"><a href="includes/delete.inc.php?DelID=<?php echo $ID; ?>"><button class="btn btn-outline-danger">Supprimer</button></a></div></div></div></div>
<?php
    
    }
    
}
?>