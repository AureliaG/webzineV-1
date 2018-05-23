<?php
require 'connection_bdd/connection_bdd.php';

require 'model/model.php'; 
$article = get_article($_GET['id']);

require './view/view_article.php';
