<?php include_once ("header.php"); ?>
<div class="col-lg-4 offset-lg-4 col-md-8 offset-md-2 col-sm-12 wrapper">
        <div class="header">
            <h2>S'inscrire</h2>
        </div>
        <form method="post" action="includes/signup.inc.php" class="signlog">

            <!-- erreur de validation-->
            <!--?php include('errors.php'); ? -->

            <div class="input-group">
                <label>Nom</label>
                <input type="text" name="name" >
            </div>
            <div class="input-group">
                <label>Prénom</label>
                <input type="text" name="firstName" >
            </div>
            <div class="input-group">
                <label>Date de naissance</label>
                <input type="date" name="dateBirth">
            </div>
            <div class="input-group">
                <label>Promotion</label>
                <input type="number" name="promo" placeholder="ex : 20XX">
            </div>
            <!-- vaut mieux avoir une drop down table à chercher après comment faire sans se casser trop la tête
                <div class="dropdown">
                <button class="btn btn-secondary-outline dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Promotions
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">2020</a>
                    <a class="dropdown-item" href="#">2019</a>
                    <a class="dropdown-item" href="#">2018</a>
                </div>
            </div> -->
            <div class="input-group">
                <label>Nom d'utilisateur</label>
                <input type="text" name="uid" >
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="email" >
            </div>
            <div class="input-group">
                <label>Sexe</label>
                <td>
                    <label for="male" class="radio-inline row"><input type="radio" name="sex" id="male" value="m"> Homme</label>
                    <label for="female" class="radio-inline row"><input type="radio" name="sex" id="female" value="f"> Femme</label>
                </td>
            </div>
            <div class="input-group">
                <label>Adresse</label>
                <input type="text" name="address" >
            </div>
            <div class="input-group">
                <label>Téléphone</label>
                <input type="number" name="phone" >
            </div>
            <div class="input-group">
                <label>Mot de passe</label>
                <input type="password"  name="pwd">
            </div>
            <div class="input-group">
                <label>Mot de passe répété</label>
                <input type="password"  name="pwdrepeat">
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">S'inscrire</button>
            </div>
            <div class="input-group erreur">
                <?php 
                    if(isset($_GET["error"])){
                        if($_GET["error"]=="emptyinput"){
                            echo "<p>Prière de remplir toutes les cases</p>";
                        }
                        else if($_GET["error"]=="invalidusername") {
                            echo "<p>Prière de choisir un bon nom d'utlisateur</p>";
                        }
                        else if($_GET["error"]=="invalidemail") {
                            echo "<p>Prière de choisir un bon email</p>";
                        }
                        else if($_GET["error"]=="pwdssarenotthesame") {
                            echo "Les mots de passe entrés sont différents</p>";
                        }
                        else if($_GET["error"]=="usernameoremailtaken") {
                            echo "<p>Nom d'utlisateur deja choisi</p>";
                        }   
                        else if($_GET["error"]=="stmtfailed") {
                            echo "<p>Une erreur s'est produite :X</p>";
                        }   
                        else if($_GET["error"]=="none") {
                            echo "<p>Vous êtes inscrit, attendez la validation d'un modérateur</p>";
                        } 
                    }
                ?>
            </div>
            <p>Vous avez déjà un compte ? <a href="login.php">Se connecter</a></p>
        </form>        
</div>

<?php include_once ("footer.php"); ?>
                