<?php
require 'connection_bdd/connection_bdd.php';



require 'model/model_article_site.php';
$articles = callArticle();

$news_count = getNewsCount();

require 'view/view_article_site.php';
