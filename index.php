<?php 
require 'connection_bdd/connection_bdd.php';

require 'model/model_article_site_main.php';
$articles_orderby= order_article();

require 'view/view_index.php';
		
