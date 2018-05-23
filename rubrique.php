<?php
require 'connection_bdd/connection_bdd.php';

require 'model/model.php';
$articles = get_articles_rubrique($_GET['rubrique']);

require './view/view_rubrique.php';
