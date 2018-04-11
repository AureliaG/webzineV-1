<?php

function order_article(){
	$sql="SELECT * FROM articles JOIN articles_page_daccueil 
	ON articles.id = articles_page_daccueil.id_article ORDER BY articles_page_daccueil.id";
	$articles_orderby = connectionDb($sql);
	$articles_orderby->execute();	 
	return $articles_orderby;		
}

//récupère les photo par article sur la base de données
//$id sera remplacé par $article['id'] dans la view
function callPhoto($id) {
	$sql = "SELECT * FROM photo_articles WHERE articles_id = ?";
		$statement = connectionDb($sql);
		$statement->execute(array($id));
		return $statement->fetch();
		var_dump($statement);
} 
