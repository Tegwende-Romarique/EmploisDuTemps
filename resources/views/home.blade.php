

@extends('layouts.include')
<!DOCTYPE HTML>
<html>
	<head>
		<title>UFR SDS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">
						
							<!-- Header -->
								<!-- <header id="header">
									<strong>Bienvenu sur votre espace de travail</strong>
								</header> -->

								<section>
								<div class='main'>
       							 @yield('main-content')
        						</div>
								</section>
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i>  ACCUEIL</a></li>													
										<li>
											<span class="opener"><i class="fa fa-user" aria-hidden="true"></i> ENSEIGNANTS</span>
											<ul>
											<li><a href="{{ url('formulaire-enseignant') }}">Ajouter un Nouveau Enseignant</a></li>
												<li><a href="#">Afficher la Liste Enseignant</a></li>
											</ul>
										</li>
										<li>
											<span class="opener"><i class="fa fa-book" aria-hidden="true"></i> MATIERES</span>
											<ul>
											<li><a href="{{ url('formulaire-matiere') }}">Ajouter une Nouvelle Matière</a></li>
											<li><a href="#">Afficher la Liste des Matière</a></li>
											</ul>
										</li>

										<li>
											<span class="opener"><i class="fa fa-signal " aria-hidden="true"></i>  Niveau</span>
											<ul>
											<li><a href="{{ url('formulaire-niveau') }}">Ajouter un Nivau</a></li>
											<li><a href="#">Afficher la Liste des Niveau</a></li>
											</ul>
										</li>
										<li>
											<span class="opener"><i class="fa fa-calendar" aria-hidden="true"></i> Programme</span>
											<ul>
											<li><a href="{{ url('formulaire-programme') }}">Ajouter un Nouveau Programme</a></li>
											<li><a href="{{ url('liste-programme') }}">Afficher la Liste des Programmes</a></li>
											</ul>
										</li>
									</ul>
								</nav>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="#">Unsplash</a>. Design: <a href="#">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
		<script src="js/jquery.min.js"></script> 
			<script src="js/browser.min.js"></script>
			<script src="js/breakpoints.min.js"></script>
			<script src="js/util.js"></script> 
			<script src="js/main.js"></script>
	</body>
</html>

