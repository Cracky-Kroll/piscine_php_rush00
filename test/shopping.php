<?php
	function creationPanier(){
		if(!isset($_SESSION['panier'])){
			$_SESSION['panier']=array();
			$_SESSION['panier']['libelleProduit']=array();
			$_SESSION['panier']['qteProduit']=array();
			$_SESSION['panier']['prixProduit']=array();
			$_SESSION['panier']['verrou'] = false;
		}
		return true;
	}
	
	function ajouterArticle($libelleProduit, $qteProduit, $prixProduit){
		if(creationPanier() && !isVerouille()){
			$position_produit = array_search($libelleProduit, $_SESSION['panier']['libelleProduit']);
			if($position_produit !== false){
				$_SESSION['panier']['libelleProduit'][$position_produit] += $qteProduit;

			}
			else{
				array_push($_SESSION['panier']['libelleProduit'], $libelleProduit);
				array_push($_SESSION['panier']['qteProduit'], $qteProduit);
				array_push($_SESSION['panier']['prixProduit'], $prixProduit);
			}
		}
		else{
			echo "Erreur, veuillez contacter l\'administrateur";
		}
	}

	function ModifierQteProduit($libelleProduit, $qteProduit){
		if(creationPanier() && !isVerrouille()){
			if($qteProduit>0){
				$position_produit = array_search($_SESSION['panier']['libelleProduit'],$libelleProduit);
				if($position_produit !== false){
					$_SESSION['panier']['libelleProduit'][$position_produit] = $qteProduit;
				}				
			}
			else{
				supprimerProduit($libelleProduit);
			}
		}
		else{
			echo "Erreur, veuillez contacter l\'administrateur";
		}
	}

	function supprimerArticle($libelleProduit){
		if (creationPanier() && !isVerouille()){
			$tmp = array();
			$tmp['libelleProduit'] = array();
			$tmp['qteProduit'] = array();
			$tmp['prixProduit'] = array();
			$tmp['verrou'] = array();

		}
		else{
			echo "Erreur, veuillez contacter l\'administrateur";
		}
	}
?>