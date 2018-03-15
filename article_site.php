<?php
require 'connection_bdd/connection_bdd.php';

function getNewsCount() {
	// SELECT count(*) FROM orders -> PDOStatement::fetchColumn
	return 13;
}

require 'model/model_article_site.php';
$articles = callArticle();
$news_count = getNewsCount();

require 'view/view_article_site.php';
