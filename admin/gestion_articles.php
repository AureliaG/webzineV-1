 <?php 
require '../connection_bdd/connection_bdd.php';

require 'model/model.php';
$articles= callArticle(); 

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	if(deleteArticle($id)) {
		echo 'La requete a bien été executé';
	} else {
		echo 'Ya un petit soucis Coco!';
	}
}

require 'view/view_gestion_articles.php';