<?php 
require 'connection_bdd/connection_bdd.php';
 
require 'model/model.php';
$articles= get_articles();


require 'view/view_articles_tous.php';