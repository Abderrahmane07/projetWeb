<?php include_once ("header.php"); ?>
<?php if(!isset($_SESSION["useruid"])){
    header("location: ./index.php");
}
?>

<div class="col-12 text-center">
    <a href="./exp.php"><h2>Ajouter une nouvelle expérience</h2></a>
</div>

<?php include_once ("includes/profile.inc.php"); ?>


<?php include_once ("footer.php"); ?>
                