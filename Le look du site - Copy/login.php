<?php include_once ("header.php"); ?>
<div class="col-lg-4 offset-lg-4 col-md-8 offset-md-2 col-sm-12 wrapper">
        <div class="header">
            <h2>Se connecter</h2>
        </div>
        <form method="post" action="includes/login.inc.php" class="signlog">
            <div class="input-group">
                <label>Nom d'utlisateur ou email</label>
                <input type="text" name="uid" >
            </div>
            <div class="input-group">
                <label>Mot de passe</label>
                <input type="password" name="pwd">
            </div>
            <div class="input-group">
                <button type="submit" name="login" class="btn">Se connecter</button>
            </div>
            <div class="input-group erreur">
                <?php 
                    if(isset($_GET["error"])){
                        if($_GET["error"]=="emptyinput"){
                            echo "<p>Prière de remplir toutes les cases</p>";
                        }
                        else if($_GET["error"]=="wronglogin") {
                            echo "<p>Informations de login incorrectes</p>";
                        }
                    }
                ?>
            </div>
            <p>Vous n'avez pas de compte ? <a href="signup.php">S'inscrire</a></p>
        </form>
    </div>

<?php include_once ("footer.php"); ?>
        