<?php 
 function get_articles_rubrique($rubrique){
	$sql="SELECT * FROM articles WHERE rubrique = ?";
	$articles = connectionDb($sql);
	$articles->execute(array($rubrique));
	$coco = $articles->fetchAll();	 
	return $coco;
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