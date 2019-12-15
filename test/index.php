<?php
session_start();
include "cleancache.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="page1.css">
        <title>Nom Site</title>
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
			<p> Nos essentiels </p>
		</div>
		<div class="blockitems">
				<div class="items">
					<a href="sweat.html"><img class="image" src="https://lp2.hm.com/hmgoepprod?set=source[/cf/62/cf626d097894be598944f3aba2d4b2662f7b4241.jpg],origin[dam],category[ladies_cardigansjumpers_hoodiessweatshirts],type[DESCRIPTIVESTILLLIFE],res[m],hmver[1]&call=url[file:/product/main]" alt=""></a>
				</div>
				<div class="items">
					<a href="top.html"><img class="image" src="https://lp2.hm.com/hmgoepprod?set=source[/38/70/3870a87c0107e924fdb23ad2532b72d19492c124.jpg],origin[dam],category[ladies_tops_vests],type[DESCRIPTIVESTILLLIFE],res[w],hmver[1]&call=url[file:/product/main]" alt=""></a>
				</div>
				<div class="items">
					<a href="gourde.html"><img class="image" src="https://www.qwetch.com/wp-content/uploads/2019/08/QD3016.jpg" alt=""></a>
				</div>
		</div>

		<hr>
	<p style="font-style:italic; text-align:right; font-family:monospace;">©ccarole & weilin 2019</p>
	<?php
	include("product.php");
	if ($_GET["catg"])
		disp_products($_GET["catg"]);
	else {
		disp_products("Gift_Cards");
		disp_products("Fruits");
		disp_products("Google");
		disp_products("Apple");
		disp_products("Vegetable");
	}
	?>

    </body>
</html>
