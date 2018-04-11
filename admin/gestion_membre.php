<?php
require '../connection_bdd/connection_bdd.php';
 
require 'model/model_gestion_membre.php';
$users= callUsers();

require 'view/view_gestion_membre.php';