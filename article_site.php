<?php
require 'connection_bdd/connection_bdd.php';

function getNewsCount() {
	$sql = 'SELECT * FROM articles_page_daccueil';
	$sth = connectionDb($sql);
	$sth->execute();
	$count = $sth->rowCount();
	return $count;
}

require 'model/model_article_site.php';
$articles = callArticle();
$news_count = getNewsCount();

require 'view/view_article_site.php';
