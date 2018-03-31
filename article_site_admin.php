<?php
require __DIR__.'/connection_bdd/connection_bdd.php';

require __DIR__.'/model/model_article_site_admin.php';

$articles = callArticle();

$news_count = getNewsCount();



require __DIR__.'/view/view_article_site_admin.php';
