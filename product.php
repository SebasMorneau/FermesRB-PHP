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
                        <a href="product.php"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php">Acceuil</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="recette.php">Recettes</a>
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
                <div class="intro-heading">Nos Produits!</div>
            </div>
        </div>
    </header>

		<!-- container de produits -->
		<div class="container">
			<div class="nosProduits">
				<div class="item well">
					<div class="col-lg-12 text-center">
						<h2>Pomme De Terre Rouge</h2>
						<h3 class="list-group-item-heading">Chieftain</h3>
						<p class="list-group-item-text" class="list-group-item-text">Pomme de terre de belle apparence, d'une grande adaptabilité.
		                    Excellente aptitude au lavage à maturité. Bonne conservation. Densité moyenne.</p>
						<h4>Utilisation</h4>
						<ul>
							<li>
								Bonne à excellente pour la cuisson à l'eau, bonne pour les croustilles à la récolte, excellente pour les frites; ne convient pas à la transformation industrielle.
							</li>
						</ul>
					</div>

					<div class="col-lg-12 text-center">
						<h3 class="list-group-item-heading">Norland</h3>
						<p class="list-group-item-text">Bonne aptitude au lavage à maturité. Se conserve bien. Teneur totale en matière sèche basse.</p>
						<h4 onclick="functionUseFor(this)">Utilisation</h4>
						<ul>
							<li>
								Très bonne bouillie et pour les frites, bonne pour les croustilles (meilleure à la récolte), et passable cuite au four.
							</li>
						</ul>
					</div>
				</div>
		        <!-- Fin de la section Item Well -->
						<!-- Début section 2 -->
		    <div class="item well">
					<div class="col-lg-12 text-center">
						<h2>Pomme De Terre À Chair Jaune</h2>
						<h3 class="list-group-item-heading">Yukon Gold</h3>
						<p class="list-group-item-text">Pomme de terre de belle apparence, excellente aptitude à la conservation; densité élevée.</p>
						<h4 onclick="functionUseFor(this)">Utilisation</h4>
						<ul>
							<li>
								Très bonne bouillie, cuite au four et pour les frites; non convenable pour les croustilles; garde sa couleur jaune après cuisson.
							</li>
						</ul>
					</div>
				</div>
				<!-- Fin de la section Item Well -->
				<!-- Début section 3 -->
					<div class="item well">
						<div class="col-lg-12 text-center">
							<h2>Pomme De Terre Blanche Longue</h2>
							<h3 class="list-group-item-heading">Gold rush</h3>
							<p class="list-group-item-text">Les pommes de terre sont généralement lisses et uniformes avec très peu de défauts externes ou internes. Bonne aptitude à la conservation.</p>
							<h4 onclick="functionUseFor(this)">Utilisation</h4>
							<ul>
								<li>
									Excellente qualité pour la cuisson au four et à l'eau; très bonne pour les frites si leur fabrication se fait à la récolte ou après une courte période d'entreposage. Sa chair très blanche, sa texture et son excellente saveur la rendent particulièrement intéressante pour utilisation domestique et la restauration.
								</li>
							</ul>
						</div>

						<div class="col-lg-12 text-center">
							<h3 class="list-group-item-heading">Hilite Russet</h3>
							<p class="list-group-item-text">Pomme de terre de grosseur uniforme, bonne conservation; densité faible à moyenne.</p>
							<h4 onclick="functionUseFor(this)">Utilisation</h4>
							<ul>
								<li>
									Bonne qualité pour la cuisson au four et les frites.
								</li>
							</ul>
						</div>

						<div class="col-lg-12 text-center">
							<h3 class="list-group-item-heading">Russet Burbank</h3>
							<p class="list-group-item-text">Pomme de terre de belle apparence, bonne aptitude au lavage à maturité.</p>
							<h4 onclick="functionUseFor(this)">Utilisation</h4>
							<ul>
								<li>
									Excellente qualité pour la cuisson au four et à l'eau, pour les croustilles et les frites.
								</li>
							</ul>
						</div>
					</div>
					<!-- Fin de la section Item Well -->
					<!-- Début section 4 -->
					<div class="item well">
						<div class="col-lg-12 text-center">
							<h2>Pomme de Terre Blanche Ronde</h2>
							<h3 class="list-group-item-heading">Superior</h3>
							<p class="list-group-item-text">
								Pomme de terre qui se conserve bien, excellente aptitude au lavage.
							</p>
							<h4 onclick="functionUseFor(this)">Utilisation</h4>
							<ul>
								<li>
									Passable à bonne bouillie, cuite au four et pour les frites; excellente pour les croustilles.
								</li>
							</ul>
						</div>
					</div>
					<!-- Fin de la section Item Well -->
					<!-- Début section 5 -->
					<div class="item well">
						<div class="col-lg-12 text-center">
							<h2>Pomme De Terre Bleue</h2>
							<h3 class="list-group-item-heading">All blue</h3>
							<p class="list-group-item-text">Couleur et saveur distinctive. Excellente texture onctueuse et
								saveur de noisette. La couleur de la chair change du violet au bleu après cuisson;
								délitescente élevée après cuisson à l'eau.</p>
							<h4 onclick="functionUseFor(this)">Utilisation</h4>
							<ul>
								<li>
									Bonne pour la cuisson à l'eau et au four.
								</li>
							</ul>
						</div>

						<div class="col-lg-12 text-center">
							<h4>Son Histoire...</h4>
							<i>
								<p>La pomme de terre bleue est originaire de l'Amérique du Sud, plus particulièrement du Pérou et de la Bolivie,
									où elle pousse toujours à l'état sauvage.
									Elle est maintenant cultivée sur une grande échelle aux Fermes Rivest Bourgeois inc., situées à Rawdon.</p>
								<p>La Pomme de terre bleue contient un colorant naturel appelé anthocyanin ce qui fait qu'elle ne verdit pas à
									la lumière comme le font les pommes de terre traditionnelles.</p>
								<p>Dans une assiette, elle y ajoute sa touche de décoration et d'originalité. Elle est maintenant disponible
									 dans plusieurs marchés d'alimentation.</p>
							</i>
						</div>
					</div>
					<!-- Fin de la section Item Well -->
					<!-- Fin de Nos Produits -->
				</div>
				<!-- Fin de Container -->
		</div>


<?php
	require_once("partial/footer.php");

?>
