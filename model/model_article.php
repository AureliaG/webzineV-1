<?php
 function get_article($id){
	$sql="SELECT * FROM articles WHERE id = ?";
	$article = connectionDb($sql);
	$article->execute(array($id));
	$coco = $article->fetch();	 
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