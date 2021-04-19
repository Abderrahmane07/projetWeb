<?php include_once ("header.php"); ?>
<?php if(!isset($_SESSION["useruid"])){
    header("location: ./index.php");
}
?>

<?php

    require_once("includes/dbh.inc.php");
    $expId=$_GET['GetID'];
    $query = "SELECT * FROM exps WHERE expsId='".$expId."'";
    $result = mysqli_query($conn, $query);

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
    }
    setcookie("userIdVerif", $userId, time() + (86400 * 300), "/");

?>

<div class="col-lg-4 offset-lg-4 col-md-8 offset-md-2 col-sm-12 wrapper">
        <div class="header">
            <h2>Modifier cette expérience</h2>
        </div>
        <form method="post" action="includes/edit.inc.php?ID=<?php echo $ID; ?>" class="signlog">


            <div class="input-group">
                <label>Type</label><input type="text" name="type" value="<?php echo $type; ?>" >
            </div>
            <div class="input-group">
                <label>Secteur</label><input type="text" name="sector" value="<?php echo $sector; ?>" >
            </div>
            <div class="input-group">
                <label>Organisation</label><input type="text" name="organisation" value="<?php echo $organisation; ?>" >
            </div>
            <div class="input-group">
                <label>Date de début</label><input type="date" name="dateBeg" value="<?php echo $dateBeg; ?>" required>
            </div>
            <div class="input-group">
                <label>Date de fin</label><input type="date" name="dateEnd" value="<?php echo $dateEnd; ?>" required>
            </div>
            <div class="input-group">
                <label>Ville</label><input type="text" name="city" value="<?php echo $city; ?>" >
            </div>
            <div class="input-group">
                <label>Département</label><input type="text" name="department" value="<?php echo $department; ?>" >
            </div>
            <div class="input-group">
                <label>Salaire</label><input type="number" name="salary" value="<?php echo $salary; ?>" >
            </div>
            <div class="input-group">
                <label>Description</label>
                <textarea rows="4" col="40" name="description" ><?php echo $description; ?></textarea>
            </div>
            <div class="input-group">
                <label>Visibilité</label>
                <td>
                    <label for="visible" class="radio-inline row"><input type="radio" name="visibility" id="visible" value="v" required> Visible</label>
                    <label for="nonVisible" class="radio-inline row"><input type="radio" name="visibility" id="nonVisible" value="n" required> Non visible</label>
                </td>
            </div>
            <div class="input-group">
                <button type="submit" name="update" class="btn">Sauvegarder les modifications</button>
            </div>
            
        </form>        
</div>

<?php include_once ("footer.php"); ?>
                