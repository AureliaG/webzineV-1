<?php
require '../connection_bdd/connection_bdd.php';
 
require 'model/model.php';

$articles = callArticle();

$news_count = getNewsCount();



require 'view/view_article_site_admin.php';
