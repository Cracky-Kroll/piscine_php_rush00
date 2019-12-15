<?php
session_start();
include "cleancache.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<!-- <link rel="stylesheet" type="text/css" href="page1.css"> -->
		<style>
		
		
body
{
	background-color: #FFBF6B;
	width: auto;
}

nav ul li
{
    float:left;
    position:relative;
    list-style-type: none;
}

nav
{
    width: 100%;
    background-color: #E99525;
}
nav ::after
{
    content: "";
    display: block;
    clear: both;
}
nav a
{
    display: inline-block;
	text-decoration: none;

}
nav ul li a
{
    padding: 20px 30px;
    color: white;
}
.classique
{
    display: none;
}
nav li:hover .classique
{
    display: inline-block;
    position: absolute;
    top: 100%;
    left: 0px;
    padding: 0px;
    z-index: 1000000;
	border-top: 5px;
	background-color: #FFB24C;


}
.classique li
{
    border-bottom: 1px solid #CCC;
}
.classique li a
{
    padding: 15px 30px;
    font-size: 13px;
    width: 270px;
}

/* ajout justine */
header {

	width: auto;
	height: 75px;
	display: flex;
	justify-content: flex-start;
	align-items: center;
	background: linear-gradient(#FFE1BA, #FFCF8F);
	color: white;

}

.header
{
	color: white;
	text-align: center;
	margin: auto;
	margin-top: -30px;
	font-size: 40px;
}

.produits
{
	color: white;
	text-align: center;
	font-size: 20px;
}

.blockitems
{
	display :flex;
	flex-wrap : wrap;
	align-items: stretch;

}

.items
{
	display : flex;
	justify-content: space-around;

}
.items a
{
	display : flex;
	justify-content: space-around;
}
.image
{
	margin: 10px;
}
.loginform
{
	text-align:center;
}

.submitbutton
{
	margin-top: 15px;
}

.loginout
{
	text-align:center;
}

.products-container
{
    justify-content: space-between;
    width: 80vw;
    margin: 1vw auto;
    text-align: center;

}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.bouton-prix{
	display: flex;
	flex-direction: column;
}
.post{
	display: flex;
	justify-content: center;
}
	
		</style>
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
                            <li><a href="sweat.php">Sweat</a></li>
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
					<a href="sweat.php"><img class="image" src="https://lp2.hm.com/hmgoepprod?set=source[/cf/62/cf626d097894be598944f3aba2d4b2662f7b4241.jpg],origin[dam],category[ladies_cardigansjumpers_hoodiessweatshirts],type[DESCRIPTIVESTILLLIFE],res[m],hmver[1]&call=url[file:/product/main]" alt=""></a>
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
	  </body>
</html>
