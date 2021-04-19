<?php include_once ("header.php"); ?>

    <!--- Image Slider -->
    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/ENSC1.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">Annuaire ENSC</h1>
                    <h3>Un nouveau monde vous appelle</h3>
                    <button type="button" class="btn btn-outline-light btn-lg">batata</button>
                    <button type="button" class="btn btn-primary btn-lg">trissian</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/ENSC2.jpg">
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/originals/5c/b6/c2/5cb6c2c00b1b4ce6eec6c6edce43eab9.jpg">
            </div>
        </div>
    </div>

    <!--- Validation -->

    <?php include_once ("includes/admin.inc.php"); ?>

    <!--- Jumbotron -->

    <div class="container-fluid" id="autour">
        <div class="row jumbotron">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <p class="lead">L'ENSC est une école publique d'ingénieurs de l'Institut National Polytechnique de Bordeaux. Elle forme des ingénieurs diplômés en "cognitique" spécialistes de la cognition artificielle ou augmentée, des technologies numériques et de leurs
                    usages, du facteur humain, de l'ergonomie et de l'intégration homme-systèmes.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                <a href="https://fr.wikipedia.org/wiki/%C3%89cole_nationale_sup%C3%A9rieure_de_cognitique" target="_blank"><button type="button" class="btn btn-outline-secondary btn-lg">En savoir plus</button></a>
            </div>
        </div>
    </div>

    <!--- Welcome Section -->
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Construit avec amour.</h1>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead">Claverie obtained his PhD in human neurosciences in 1983 at the University of Franche-Comté in Besançon (France) and received two HDR (Accreditation to supervise researches) in 1987, as Doctor es sciences and as Doctor es letters and human
                    and social sciences at the University of Bordeaux II.</p>
            </div>
        </div>
    </div>

    <!--- Three Column Section -->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-code"></i>
                <h3>HTML5</h3>
                <p>On a utlisé la dernière version de HTML, HTML5.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-bold"></i>
                <h3>BOOTSTRAP</h3>
                <p>On a utlisé la dernière version de Bootstrap, Bootstrap5 Beta.</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <i class="fab fa-css3"></i>
                <h3>CSS3</h3>
                <p>On a utlisé la dernière version de CSS, CSS3.</p>
            </div>
        </div>
        <hr class="my-4">
    </div>

    <!--- Students/Promos -->
    <?php
        if(isset($_SESSION["useruid"])){
            include_once ("promos.php");
        }
    ?>

    <!--- Two Column Section -->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-12 col-lg-6">
                <h2>Rien ne veut rien dire</h2>
                <p>He is a graduate of Psychology with a license in General Psychology (1978), a diploma in advanced studies in Psychological sciences and education (1980) obtained at the University of Bordeaux II. He holds a master's degree in clinical
                    and pathological psychology oriented towards neuropsychology and is the director of a university diploma of medicine specialization in neuropsychological sciences at the Faculty of Medicine, University of Bordeaux.</p>
                <p>He was appointed university professor by decree on September 1, 1992 (decree of February 1, 1993, p. 2050), and he acceded to the academic position of exceptional class on 2011.</p>
                <p>Bernard Claverie has supervised some twenty doctoral theses on psychology, cognitive sciences, and neuroscience engineering.</p>
                <br>
                <a href="#" class="btn btn-primary">Learn more</a>
            </div>
            <div class="col-lg-6">
                <img src="img/desk.png" class="img-fluid">
            </div>

        </div>
    </div>
    <hr class="my-4">


    <!--- Fixed background -->
    <figure>
        <div class="fixed-wrap">
            <div id="fixed">

            </div>
        </div>
    </figure>

    <!--- Partners Section -->

    <button class="fun" data-toggle="collapse" data-target="#partners">Appuyer pour voir les partenaires de l'ENSC</button>
    <div id="partners" class="collapse">
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-sm-6 col-md-3">
                    <img class="logos" src="img/logos/dassault.png">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="logos" src="img/logos/edf.png">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="logos" src="img/logos/ibm.png">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="logos" src="img/logos/thales.png">
                </div>
            </div>
        </div>
    </div>

    <!--- Two Column Section -->

    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-12 col-lg-6">
                <h2>Notre philosophie.</h2>
                <p>He is a graduate of Psychology with a license in General Psychology (1978), a diploma in advanced studies in Psychological sciences and education (1980) obtained at the University of Bordeaux II. He holds a master's degree in clinical
                    and pathological psychology oriented towards neuropsychology and is the director of a university diploma of medicine specialization in neuropsychological sciences at the Faculty of Medicine, University of Bordeaux.</p>
                <p>He was appointed university professor by decree on September 1, 1992 (decree of February 1, 1993, p. 2050), and he acceded to the academic position of exceptional class on 2011.</p>
                <br>
            </div>
            <div class="col-lg-6">
                <img src="https://images.sudouest.fr/2019/06/24/5d10294a66a4bd8b405ac1f2/golden/bernard-claverie.jpg?v1" class="img-fluid">
            </div>
        </div>
        <hr class="my-4">
    </div>


<?php include_once("footer.php"); ?>
