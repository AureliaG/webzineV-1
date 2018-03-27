<?php
//récupère les articles sur la base de données
function callArticle() {
	$sql = "SELECT * FROM articles ORDER BY id DESC " ;
	$articles = connectionDb($sql);
	$articles->execute();
	return $articles;	
}

//récupère les photo par article sur la base de données
//$id sera remplacé par $article['id'] dans la view
function callPhoto($id) {
	$sql = "SELECT * FROM photo_articles WHERE articles_id = ?";
		$statement = connectionDb($sql);
		$statement->execute(array($id));
		return $statement->fetch();	
} 

//recupère le nombre d'article en fonction des lignes de la table article_page_daccueil
function getNewsCount() {
	$sql = 'SELECT * FROM articles_page_daccueil';
	$sth = connectionDb($sql);
	$execute = $sth->execute();
	if ($execute){
		$count = $sth->rowCount();
		return $count;
	}
	else{
		return "Erreur: execute renvoie faux";
	}	
}



