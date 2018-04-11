<?php
require 'connection_bdd/connection_bdd.php';

require 'model/model_rubrique.php';
$articles = get_articles_rubrique($_GET['rubrique']);

require './view/view_rubrique.php';
