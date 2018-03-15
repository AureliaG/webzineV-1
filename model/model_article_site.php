<?php
//reccupère les articles sur la base de donné
function callArticle() {
	$sql = "SELECT * FROM articles ORDER BY id DESC " ;
	$articles = connectionDb($sql);
	$articles->execute();
	return $articles;	
}
//inject les articles sur la page d'accueil
function sendarticle(){

}

