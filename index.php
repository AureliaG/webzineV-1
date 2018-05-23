<?php 
require 'connection_bdd/connection_bdd.php';

require 'model/model.php';
$articles_orderby= order_article();
require 'view/view_index.php';
