<?php 
 //reccupère tous les articles du plus rescent au plus vieux
 function get_articles(){ 
 	$articles = [];
	$sql="SELECT * FROM articles ORDER BY id DESC";
	$articles = connectionDb($sql);
	$articles->execute();	 
	return $articles; 
}

//recupère un article en fonction de son id
 function get_article($id){ 
	$sql="SELECT * FROM articles WHERE id = ?";
	$article = connectionDb($sql);
	$article->execute(array($id));
	$coco = $article->fetch();	 
	return $coco; 
}

//recupère les articles de la même rubrique
 function get_articles_rubrique($rubrique){
	$sql="SELECT * FROM articles WHERE rubrique = ?";
	$articles = connectionDb($sql);
	$articles->execute(array($rubrique));
	$coco = $articles->fetchAll();	 
	return $coco;
}

//recupère les articles selectionné pour patate chaude
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