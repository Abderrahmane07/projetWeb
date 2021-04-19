<?php include_once ("header.php"); ?>
<?php if(!isset($_SESSION["useruid"])){
    header("location: ./index.php");
}
?>

<div class="col-lg-4 offset-lg-4 col-md-8 offset-md-2 col-sm-12 wrapper">
        <div class="header">
            <h2>Ajouter une expérience</h2>
        </div>
        <form method="post" action="includes/exp.inc.php" class="signlog">


            <div class="input-group">
                <label>Type</label>
                <input type="text" name="type" >
            </div>
            <div class="input-group">
                <label>Secteur</label>
                <input type="text" name="sector" >
            </div>
            <div class="input-group">
                <label>Organisation</label>
                <input type="text" name="organisation" >
            </div>
            <div class="input-group">
                <label>Date de début</label>
                <input type="date" name="dateBeg" required>
            </div>
            <div class="input-group">
                <label>Date de fin</label>
                <input type="date" name="dateEnd" required>
            </div>
            <div class="input-group">
                <label>Ville</label>
                <input type="text" name="city" >
            </div>
            <div class="input-group">
                <label>Département</label>
                <input type="text" name="department" >
            </div>
            <div class="input-group">
                <label>Salaire</label>
                <input type="number" name="salary">
            </div>
            <div class="input-group">
                <label>Description</label>
                <textarea rows="4" col="40" name="description" ></textarea>
            </div>
            <div class="input-group">
                <label>Visibilité</label>
                <td>
                    <label for="visible" class="radio-inline row"><input type="radio" name="visibility" id="visible" value="v" required> Visible</label>
                    <label for="nonVisible" class="radio-inline row"><input type="radio" name="visibility" id="nonVisible" value="n" required> Non visible</label>
                </td>
            </div>
            <div class="input-group">
                <button type="submit" name="save" class="btn">Sauvegarder cette expérience</button>
            </div>
            
        </form>        
</div>

<?php include_once ("footer.php"); ?>
                