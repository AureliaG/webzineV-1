<?php  
require '../connection_bdd/connection_bdd.php';
 
require 'model/model.php';
$article = get_article($_GET['id']); 

if (isset($_POST['submit'])) {
	EditArticle($_GET['id']);
}
 

require 'view/view_edit_article.php';