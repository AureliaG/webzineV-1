<!DOCTYPE html>
<html>
	<head>
		<title>Espace Admin </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/style_membre.css">
	</head>
	<header>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h1 align="center" id="title">Salut toi</h1>
			<a href="../index.php" role="button" class="btn btn-outline-secondary" style="display: flex; justify-content: center;">Revenir sur le site</a>
			<!--message de confimation-->
		    <?php
		      if(isset($_GET['message'])){
		       echo $_GET['message']; 
		      }
		    ?> 
		</div>    
		<div class="col-md-4"></div> 
	</div>   <!--fin row-->
	</header>
	<body>
	<div align="center">
		<img src="../pictures/site/lune_admin.png" class="rounded  img-thumbnail figure-img img-fluid" style="width: 180px;" >
		<ul style="list-style-type: none;">
			<li><a href="insert_article.php">Envoyer un article dans la base de donné</a></li>
			<li><a href="article_site_admin.php">Gestion de l'ordre des articles sur la page d'accueil</a></li>
			<li><a href="gestion_articles.php">Gestion des articles</a></li>
			<li><a href="gestion_membre.php">Gestion des membres</a></li>
			<!--<li><a href="">Gestion du forum</a></li> --> 
		</ul>
	</div>	 	
	</body>