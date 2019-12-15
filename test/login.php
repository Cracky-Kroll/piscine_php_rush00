<?php
	include 'auth.php';
	session_start();
	function not_loggued() {
    	$_SESSION['loggued_on_user'] = "";
    	return ("ERROR\n");
	}
	function loggued() {

    	?>
		<html>
		<head>
		    <meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="page1.css">
		</head>
		<body>
			<header>
				<div class="header">
					<p>super site</p>
				</div>
			</header>
			<nav>
				<ul>
					<li class="produit"><a href="index.html">Accueil</a>
					</li>
					<li class="produit"><a>Produits</a>
						<ul class="classique">
							<li><a href="sweat.html">Sweat</a></li>
							<li><a href="top.html">Top</a></li>
							<li><a href="gourde.html">Gourde</a></li>
						</ul>
					</li>
					<li class="login"><a>Espace Personnel</a>
						<ul class="classique">
								<li><a href="login.html">se connecter</a></li>
								<li><a href="logout.html">se deconnecter</a></li>
								<li><a href="modif.html">changer de mot de passe</a></li>
						</ul>
					</li>
					<li class="panier"><a>Panier</a>
						<ul class="classique">
							<li><a>voir panier</a></li>
							<li><a>vider panier</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<div class="produits">
				<p> Bienvenue </p>
			</div>
			</div>
		</body>
		</html><?php
	}
	if ($_POST['login'] != NULL && $_POST['passwd'] != NULL){
    	if (auth($_POST['login'], $_POST['passwd'])){
        	$_SESSION['loggued_on_user'] = $_POST['login'];
            	loggued();
    	}
    	else{
        	echo not_loggued();
    	}
	}
	else
    	echo not_loggued();
?>
