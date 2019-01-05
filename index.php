<?php
	require_once("partial/header.php");
?>


<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Les Fermes Rivest, Bourgeois</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Produits</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Recettes</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bienvenue chez-nous!</div>
                <div class="intro-heading">Une Entreprise Familiale</div>
                <a href="#maps" class="page-scroll btn btn-xl">Nous trouver!</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">L'agriculture, une passion au coeur de notre réalité.</h2>
                    <h3 class="section-subheading text-muted">Une entreprise familiale spécialisée dans la production, l'emballage et la distribution de pomme de terre. Vous pouvez retrouver nos produits dans plusieurs épiceries du Québec.</h3>
                </div>
            </div>
            <div class="row text-center">

            </div>

        </div>

    </section>

    <div class="imageFamille">
        <div class="quiSommesNous">
            <h2 onclick="window.location.href='about.php';">Qui sommes-nous?</h2>
        </div>
    </div>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">À la recherche de pomme de terre de qualité pour votre entreprise?</h2>
                    <h3 class="section-subheading text-muted">Venez découvrir notre grande variété de produits!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a onclick="window.location.href='product.php';" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover"></div>
                        <img src="img/patate/pataterouge.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Pomme de terre rouge</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a onclick="window.location.href='product.php';" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"></div>
                        </div>
                        <img src="img/patate/patateblanche.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Pomme de terre blanche longue</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a onclick="window.location.href='product.php';" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"></div>
                        </div>
                        <img src="img/patate/ronde.JPG" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Pomme de terre blanche ronde</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a onclick="window.location.href='product.php';" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"></div>
                        </div>
                        <img src="img/patate/patatebleur.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Pomme de terre bleue</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a onclick="window.location.href='product.php';" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"></div>
                        </div>
                        <img src="img/patate/patatejaune.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Pomme de terre à chair jaune</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a onclick="window.location.href='product.php';" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"></div>
                        </div>
                        <img src="img/patate/logo2.JPG" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Venez-voir!</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">À la recherche d'inspiration?</h2>
                    <h3 class="section-subheading text-muted">Nous avons pensez à vous.</h3>
                </div>
            </div>
            <div class="coverRecettes" onclick="window.location.href='recette.php';">
                <h2>Venez découvrir nos recettes!</h2>
            </div>
        </div>
    </section>


    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div> -->
            </div>
        </div>
    </aside>



    <!-- Map -->
 <section id="maps" class="map">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 text-center">
                 <h2 class="section-heading">Notre ferme?</h2>
                 <h3 class="section-subheading text-muted">C'est par ici!</h3>
             </div>
         </div>
     </div>
     <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
    		 src="https://www.google.com/maps/embed/v1/place?q=Les%20fermes%20Rivest%20%26%20bourgeois&key=AIzaSyAcqpFvmN52nyJhogGJW2F8iMxoXXD_5Zo"></iframe>
     <br/>
     <small>
         <a href="https://www.google.ca/maps/place/Rivest+Bourgeois+Inc+(Les+Fermes)/@46.0306437,
				 -73.6538687,15z/data=!4m5!3m4!1s0x0:0xf90eb1aee5925d9!8m2!3d46.0306437!4d-73.6538687"></a>
     </small>
 </section>

<?php
    require_once("partial/footer.php");

 ?>
