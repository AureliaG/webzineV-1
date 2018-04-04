<?php
require 'connection_bdd/connection_bdd.php';

require 'model/model_article.php'; 
$article = get_article($_GET['id']);

require './view/view_article.php';